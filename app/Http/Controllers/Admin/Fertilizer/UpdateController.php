<?php


namespace App\Http\Controllers\Admin\Fertilizer;

use App\Http\Controllers\Controller;
use App\Models\Fertilizer;

class UpdateController extends Controller
{
    public function __invoke()
    {
        $fertilizers = Fertilizer::all();
        return view('admin.fertilizer.index', compact('fertilizers'));
    }
}
