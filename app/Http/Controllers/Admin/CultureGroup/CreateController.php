<?php


namespace App\Http\Controllers\Admin\CultureGroup;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin/culture_group/create');
    }
}
