<?php


namespace App\Http\Controllers\Admin\Fertilizer;

use App\Http\Controllers\Controller;
use App\Models\CultureGroup;

class CreateController extends Controller
{
    public function __invoke()
    {
        $cultureGroups = CultureGroup::all();
        return view('admin.fertilizer.create', compact('cultureGroups'));
    }
}
