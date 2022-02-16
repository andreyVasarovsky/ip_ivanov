<?php

namespace App\Imports;

use App\Models\CultureGroup;
use App\Models\Fertilizer;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FertilizersImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection AS $item){
            if (isset($item['naimenovanie']) && !is_null($item['naimenovanie'])){
                $cultureGroupId = $item['kultura_id'];
                if (isset($item['gruppa_kultur']) && !is_null($item['gruppa_kultur'])){
                    $cultureGroup = CultureGroup::firstOrCreate(['title' => $item['gruppa_kultur']]);
                    $cultureGroupId = $cultureGroup->id;
                }

                Fertilizer::firstOrCreate([
                    'title' => $item['naimenovanie']
                ],[
                    'title' => $item['naimenovanie'],
                    'nitrogen_norm' => $item['norma_azot'],
                    'phosphorus_norm' => $item['norma_fosfor'],
                    'potassium_norm' => $item['norma_kalii'],
                    'culture_group_id' => $cultureGroupId,
                    'district' => $item['raion'],
                    'price' => $item['stoimost'],
                    'desc' => $item['opisanie'],
                    'purpose' => $item['naznacenie'],
                ]);
            }
        }
    }
}
