<?php

namespace App\Imports;

use App\Models\Fertilizer;
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

class FertilizersImport implements ToModel, WithValidation, WithHeadingRow, SkipsOnError, SkipsOnFailure
{
    use Importable, SkipsErrors, SkipsFailures;

    public function model(array $row): Fertilizer
    {
        return new Fertilizer([
            'title' => $row['naimenovanie'],
            'nitrogen_norm' => $row['norma_azot'],
            'phosphorus_norm' => $row['norma_fosfor'],
            'potassium_norm' => $row['norma_kalii'],
            'culture_group_id' => $row['kultura_id'],
            'district' => $row['raion'],
            'price' => $row['stoimost'],
            'desc' => $row['opisanie'],
            'purpose' => $row['naznacenie'],
        ]);
    }

    public function rules(): array
    {
        return [
            'naimenovanie' => 'required|unique:fertilizers,title',
            'norma_azot' => 'nullable|min:0',
            'norma_fosfor' => 'nullable|min:0',
            'norma_kalii' => 'nullable|min:0',
            'kultura_id' => 'nullable|exists:culture_groups,id',
            'raion' => 'nullable',
            'stoimost' => 'required|numeric|min:0',
            'opisanie' => 'nullable',
            'naznacenie' => 'nullable',
        ];
    }

    /**
     * @return array
     */
    public function customValidationMessages()
    {
        return [
            'naimenovanie.required' => 'Title is required!',
            'naimenovanie.unique' => 'This Fertilizer already exists!',
            'stoimost.required' => 'Price required!',
            'stoimost.min' => 'Price must be >= 0!',
            'norma_kalii.min' => 'Nitrogen norm. must be >= 0',
            'norma_azot.min' => 'Nitrogen norm. must be >= 0',
            'norma_fosfor.min' => 'Nitrogen norm. must be >= 0',
            'kultura_id.exists' => 'Unknown Culture group',
        ];
    }

    public function onError(\Throwable $e)
    {
        $this->failures[] = new Failure(0, '', [$e->getMessage()], []);
    }
}
