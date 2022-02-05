<?php


namespace App\Http\Controllers\Admin\CultureGroup;

use App\Http\Controllers\Controller;
use App\Models\CultureGroup;

class IndexController extends Controller
{
    public function __invoke()
    {
        $groups = CultureGroup::all();
        return view('admin/culture_group/index', compact('groups'));
    }
}
