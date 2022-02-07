<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use function Symfony\Component\Translation\t;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    const ADMIN_ROLE_FK = 1;
    const ROLE_TITLE_MAP = [
        1 => 'Админ',
        2 => 'Пользователь'
    ];
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

    protected $table = 'users';
    protected $guarded = [];

    public function isAdmin():bool{
        return $this->role_fk === self::ADMIN_ROLE_FK;
    }

    public function getRoleTitle():string{
        return (isset(self::ROLE_TITLE_MAP[$this->role_fk])) ? self::ROLE_TITLE_MAP[$this->role_fk] : 'Неизвестно';
    }

    public function getRoles():array{
        return self::ROLE_TITLE_MAP;
    }
}
