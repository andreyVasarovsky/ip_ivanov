<?php


namespace App\Http\Controllers\Admin\CultureGroup;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;

class IndexController extends Controller
{
    public function __invoke()
    {
        dd('culture_group');
        $fertilizers = Fertilizer::all();
        return view('admin/client/index');
    }
}
