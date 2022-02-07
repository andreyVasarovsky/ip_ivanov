<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CultureGroup extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'culture_groups';
    protected $guarded = [];
}
