<?php

namespace App\Imports;

use App\Models\Client;
use Illuminate\Support\Carbon;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Validators\Failure;
use Throwable;

class ClientsImport implements ToModel, WithValidation, WithHeadingRow, SkipsOnError, SkipsOnFailure
{
    use Importable, SkipsErrors, SkipsFailures;

    public function model(array $row): Client
    {
        $date = Carbon::parse($row['data_dogovora']);

        return new Client([
            'title' => $row['naimenovanie'],
            'agreement_date' => $date,
            'delivery_price' => $row['stoimost_postavki'],
            'region' => $item['region'] ?? '',
        ]);
    }

    public function rules(): array
    {
        return [
            'naimenovanie' => 'required|unique:clients,title',
            'data_dogovora' => 'required|date_format:d.m.Y',
            'stoimost_postavki' => 'required|numeric|min:0',
        ];
    }

    /**
     * @return array
     */
    public function customValidationMessages()
    {
        return [
            'naimenovanie.required' => 'Title is required!',
            'naimenovanie.unique' => 'This Client already exists!',
            'data_dogovora.required' => 'Date is required!',
            'stoimost_postavki.required' => 'Delivery price required!',
            'data_dogovora.date_format' => 'Invalid date format. Required: d.m.Y!',
            'stoimost_postavki.min' => 'Delivery price must be >= 0',
        ];
    }

    public function onError(\Throwable $e)
    {
        $this->failures[] = new Failure(0, '', [ $e->getMessage() ], []);
    }
}
