<?php


namespace App\Services\Admin\User;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Service
{
    public function store($data)
    {
        $data['password'] = Hash::make($data['password']);
        User::firstOrCreate([
            'email' => $data['email']
        ], $data);
    }

    public function update(User $user, $data)
    {
        $user->update($data);
    }
}
