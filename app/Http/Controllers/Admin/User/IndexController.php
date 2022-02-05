<?php


namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;

class IndexController extends Controller
{
    public function __invoke()
    {
        dd('User');
        $fertilizers = Fertilizer::all();
        return view('admin/client/index');
    }
}
