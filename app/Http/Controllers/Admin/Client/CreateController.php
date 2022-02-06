<?php


namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Admin\Client\BaseController;

class CreateController extends BaseController
{
    public function __invoke()
    {
        return view('admin/client/create');
    }
}
