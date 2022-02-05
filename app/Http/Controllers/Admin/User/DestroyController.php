<?php


namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;

class DestroyController extends Controller
{
    public function __invoke()
    {
        $fertilizers = Fertilizer::all();
        return view('admin/fertilizer/index', compact('fertilizers'));
    }
}
