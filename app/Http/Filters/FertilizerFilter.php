<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class FertilizerFilter extends AbstractFilter
{
    public const DESC = 'desc';
    public const TITLE = 'title';
    public const PRICE = 'price';
    public const PURPOSE = 'purpose';
    public const DISTRICT = 'district';
    public const NITROGEN_NORM = 'nitrogen_norm';
    public const POTASSIUM_NORM = 'potassium_norm';
    public const PHOSPHORUS_NORM = 'phosphorus_norm';
    public const CULTURE_GROUP_ID = 'culture_group_id';


    protected function getCallbacks(): array
    {
        return [
            self::DESC => [$this, 'desc'],
        ];
    }

    public function desc(Builder $builder, $value)
    {
        $builder->where('desc', 'like', "%{$value}%");
    }
}
