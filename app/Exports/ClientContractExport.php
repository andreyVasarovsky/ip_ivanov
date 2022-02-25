<?php


namespace App\Exports;


use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\Exception\Exception;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;

class ClientContractExport
{
    private $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    public function download()
    {
        $phpWord = new PhpWord();
        $section = $phpWord->addSection();
        $section->addText('Справка', [
            'size' => 18, 'color' => '#000', 'bold' => true
        ]);
        $section->addText('');
        $textSettings = ['size' => 13, 'color' => '#545454', 'italic' => true];
        $section->addText('Подтверждает действительность заключение договора от ' . $this->client->agreement_date . ' с компанией ' . $this->client->title .
            ' на сумму ' . number_format($this->client->delivery_price, 2), $textSettings);
        $storagePath = 'app\word\export\client_' . $this->client->id . '.docx';
        try {
            $objWriter = IOFactory::createWriter($phpWord, 'Word2007');
        } catch (Exception $e) {
            return response()->json(['status' => false, 'error' => 'Document generation error!']);
        }
        try {
            $objWriter->save(storage_path($storagePath));
        } catch (\Exception $e) {
            return response()->json(['status' => false, 'error' => 'Document saving error!']);
        }
        return response()->download(storage_path($storagePath));
    }
}
