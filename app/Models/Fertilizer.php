<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fertilizer extends Model
{
    use HasFactory, SoftDeletes, Filterable;
    protected $table = 'fertilizers';
    protected $guarded = [];

    public function category(){
        return $this->belongsTo(CultureGroup::class, 'culture_group_id', 'id');
    }
}
