<?php

namespace App\Imports;

use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class ClientsImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        foreach ($collection as $item) {
            //Check date valid;
            if (gettype($item['data_dogovora']) !== 'integer') {
                Carbon::parse($item['data_dogovora']);
            } else {
                $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($item['data_dogovora']);
            }

            if (isset($item['naimenovanie']) && !is_null($item['naimenovanie'])) {
                Client::firstOrCreate([
                    'title' => $item['naimenovanie']
                ], [
                    'title' => $item['naimenovanie'],
                    'agreement_date' => $date,
                    'delivery_price' => $item['stoimost_postavki'],
                    'region' => $item['region'] ?? '',
                ]);
            }
        }
    }
}
