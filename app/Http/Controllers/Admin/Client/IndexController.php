<?php


namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;

class IndexController extends Controller
{
    public function __invoke()
    {
        $fertilizers = Fertilizer::all();
        return view('admin/client/index');
    }
}
