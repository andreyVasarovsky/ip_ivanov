<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportStatus extends Model
{
    use HasFactory;
    protected $table = 'import_statuses';
    protected $guarded = [];
    const STATUSES_LIST = [
        1 => 'В процессе',
        2 => 'Ошибка во время импорта',
        3 => 'Данные успешно импортированы',
    ];
}
