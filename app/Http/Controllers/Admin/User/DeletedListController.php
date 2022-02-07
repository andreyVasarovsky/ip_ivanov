<?php


namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\User\BaseController;
use App\Models\User;

class DeletedListController extends BaseController
{
    public function __invoke()
    {
        $users = User::onlyTrashed()->get();
        return view('admin.user.deleted_list', compact('users'));
    }
}
