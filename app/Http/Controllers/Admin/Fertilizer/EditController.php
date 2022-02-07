<?php


namespace App\Http\Controllers\Admin\Fertilizer;

use App\Http\Controllers\Controller;
use App\Models\CultureGroup;
use App\Models\Fertilizer;

class EditController extends Controller
{
    public function __invoke(Fertilizer $fertilizer)
    {
        $cultureGroups = CultureGroup::all();
        return view('admin.fertilizer.edit', compact('fertilizer', 'cultureGroups'));
    }
}
