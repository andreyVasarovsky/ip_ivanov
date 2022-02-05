<?php


namespace App\Http\Controllers\Admin\CultureGroup;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('admin/culture_group/create');
    }
}
