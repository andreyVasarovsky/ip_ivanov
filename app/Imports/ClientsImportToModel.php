<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;

class ClientsImportToModel implements ToModel, WithValidation, SkipsOnFailure
{

    public function model(array $row)
    {
        //Check date valid;
//        if (gettype($row['data_dogovora']) !== 'integer') {
//            Carbon::parse($row['data_dogovora']);
//        } else {
//        }
        $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row['data_dogovora']);

        return new Client([
            'title'     => $row['naimenovanie'],
            'agreement_date'    => $date,
            'delivery_price'    => $row['stoimost_postavki'],
            'region' => $item['region'] ?? '',
        ]);
    }

    public function rules(): array
    {
        return [
            'naimenovanie' => Rule::in(['zzzzzzzzz']),
        ];
    }

    public function onFailure(Failure ...$failures)
    {
        // TODO: Implement onFailure() method.
    }
}
