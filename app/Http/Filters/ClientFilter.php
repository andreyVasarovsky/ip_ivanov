<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class ClientFilter extends AbstractFilter
{
    public const TITLE = 'title';
    public const AGREEMENT_DATE_FROM = 'agreement_date_from';
    public const AGREEMENT_DATE_TILL = 'agreement_date_till';
    public const DELIVERY_PRICE_FROM = 'delivery_price_from';
    public const DELIVERY_PRICE_TILL = 'delivery_price_till';
    public const REGION = 'region';

    protected function getCallbacks(): array
    {
        return [
            self::TITLE => [$this, 'title'],
            self::AGREEMENT_DATE_FROM => [$this, 'agreementDateFrom'],
            self::AGREEMENT_DATE_TILL => [$this, 'agreementDateTill'],
            self::DELIVERY_PRICE_FROM => [$this, 'deliveryPriceFrom'],
            self::DELIVERY_PRICE_TILL => [$this, 'deliveryPriceTill'],
            self::REGION => [$this, 'region'],
        ];
    }

    public function title(Builder $builder, $value)
    {
        $builder->where('title', 'like', "%{$value}%");
    }

    public function agreementDateFrom(Builder $builder, $value)
    {
        $builder->where('agreement_date', '>=', $value);
    }

    public function agreementDateTill(Builder $builder, $value)
    {
        $builder->where('agreement_date', '<=', $value);
    }

    public function deliveryPriceFrom(Builder $builder, $value)
    {
        $builder->where('delivery_price', '>=', $value);
    }

    public function deliveryPriceTill(Builder $builder, $value)
    {
        $builder->where('delivery_price', '<=', $value);
    }

    public function region(Builder $builder, $value)
    {
        $builder->where('region', 'like', "%{$value}%");
    }
}
