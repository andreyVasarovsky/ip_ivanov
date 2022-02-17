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
    const STATUSES_COLOR_LIST = [
        1 => 'text-primary',
        2 => 'text-danger',
        3 => 'text-success',
    ];
    const STATUS_MAP = [
        'NEW' => 1,
        'FAILED' => 2,
        'SUCCESS' => 3,
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
