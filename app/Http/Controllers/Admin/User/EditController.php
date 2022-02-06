<?php


namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\User\BaseController;
use App\Models\User;

class EditController extends BaseController
{
    public function __invoke(User $user)
    {
        $user_roles = User::ROLE_TITLE_MAP;
        return view('admin.user.edit', compact('user', 'user_roles'));
    }
}
