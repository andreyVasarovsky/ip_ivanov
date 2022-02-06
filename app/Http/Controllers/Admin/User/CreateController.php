<?php


namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\User\BaseController;
use App\Models\User;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $user_roles = User::ROLE_TITLE_MAP;
        return view('admin.user.create', compact('user_roles'));
    }
}
