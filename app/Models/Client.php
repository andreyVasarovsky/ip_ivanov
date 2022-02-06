<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $table = 'clients';
    protected $guarded = [];

    public function getFormattedDeliveryPrice():string{
        return number_format($this->delivery_price, 2);
    }
}
