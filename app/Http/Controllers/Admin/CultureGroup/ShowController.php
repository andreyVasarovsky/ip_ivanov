<?php


namespace App\Http\Controllers\Admin\CultureGroup;

use App\Http\Controllers\Controller;
use App\Models\CultureGroup;

class ShowController extends Controller
{
    public function __invoke(CultureGroup $group)
    {
        return view('admin.culture_group.show', compact('group'));
    }
}
