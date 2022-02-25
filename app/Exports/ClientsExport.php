<?php

namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ClientsExport implements FromView, ShouldAutoSize, WithStyles
{
    public $clients;

    /**
     * ClientsExport constructor.
     * @param $clients
     */
    public function __construct($clients)
    {
        $this->clients = $clients;
    }

    public function view(): View
    {
        return view('admin.client.export.xls', [
            'clients' => $this->clients
        ]);
    }

    public function styles(Worksheet $sheet): array
    {
        return [
            1    => ['font' => ['bold' => true]],
        ];
    }
}
