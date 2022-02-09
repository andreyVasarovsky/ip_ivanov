<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class FertilizerFilter extends AbstractFilter
{
    public const DESC = 'desc';
    public const TITLE = 'title';
    public const PURPOSE = 'purpose';
    public const PRICE_FROM = 'price_from';
    public const PRICE_TILL = 'price_till';
    public const CULTURE_GROUP_ID = 'culture_group_id';
    public const NITROGEN_NORM_TILL = 'nitrogen_norm_till';
    public const NITROGEN_NORM_FROM = 'nitrogen_norm_from';
    public const POTASSIUM_NORM_FROM = 'potassium_norm_from';
    public const POTASSIUM_NORM_TILL = 'potassium_norm_till';
    public const PHOSPHORUS_NORM_TILL = 'phosphorus_norm_till';
    public const PHOSPHORUS_NORM_FROM = 'phosphorus_norm_from';


    protected function getCallbacks(): array
    {
        return [
            self::DESC => [$this, 'desc'],
            self::TITLE => [$this, 'title'],
            self::PURPOSE => [$this, 'purpose'],
            self::PRICE_FROM => [$this, 'priceFrom'],
            self::PRICE_TILL => [$this, 'priceTill'],
            self::CULTURE_GROUP_ID => [$this, 'cultureGroupId'],
            self::NITROGEN_NORM_TILL => [$this, 'nitrogenNormTill'],
            self::NITROGEN_NORM_FROM => [$this, 'nitrogenNormFrom'],
            self::POTASSIUM_NORM_FROM => [$this, 'potassiumNormFrom'],
            self::POTASSIUM_NORM_TILL => [$this, 'potassiumNormTill'],
            self::PHOSPHORUS_NORM_TILL => [$this, 'phosphorusNormFrom'],
            self::PHOSPHORUS_NORM_FROM => [$this, 'phosphorusNormTill'],
        ];
    }

    public function desc(Builder $builder, $value)
    {
        $builder->where('desc', 'like', "%{$value}%");
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }

    public function purpose(Builder $builder, $value)
    {
        $builder->where('purpose', 'like', "%{$value}%");
    }

    public function priceFrom(Builder $builder, $value)
    {
        $builder->where('price', '>=', $value);
    }

    public function priceTill(Builder $builder, $value)
    {
        $builder->where('price', '<=', $value);
    }

    public function cultureGroupId(Builder $builder, $value)
    {
        $builder->whereIn('culture_group_id', $value);
    }

    public function nitrogenNormTill(Builder $builder, $value)
    {
        $builder->where('nitrogen_norm', '<=', $value);
    }

    public function nitrogenNormFrom(Builder $builder, $value)
    {
        $builder->where('nitrogen_norm', '>=', $value);
    }

    public function phosphorusNormTill(Builder $builder, $value)
    {
        $builder->where('phosphorus_norm', '<=', $value);
    }

    public function phosphorusNormFrom(Builder $builder, $value)
    {
        $builder->where('phosphorus_norm', '>=', $value);
    }

    public function potassiumNormTill(Builder $builder, $value)
    {
        $builder->where('potassium_norm', '<=', $value);
    }

    public function potassiumNormFrom(Builder $builder, $value)
    {
        $builder->where('potassium_norm', '>=', $value);
    }
}
