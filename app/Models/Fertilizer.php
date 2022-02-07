<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fertilizer extends Model
{
    use HasFactory;
    protected $table = 'fertilizers';
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(CultureGroup::class, 'culture_group_id', 'id');
    }
}
