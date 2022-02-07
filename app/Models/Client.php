<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'clients';
    protected $guarded = [];

    public function getFormattedDeliveryPrice():string{
        return number_format($this->delivery_price, 2);
    }
}
