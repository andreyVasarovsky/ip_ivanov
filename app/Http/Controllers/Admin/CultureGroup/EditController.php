<?php


namespace App\Http\Controllers\Admin\CultureGroup;

use App\Http\Controllers\Controller;
use App\Models\CultureGroup;

class EditController extends Controller
{
    public function __invoke(CultureGroup $group)
    {
        return view('admin/culture_group/edit', compact('group'));
    }
}
