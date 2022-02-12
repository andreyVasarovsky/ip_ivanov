<?php


namespace App\Http\Controllers\FastRegistration;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        return view('fast_registration.index');
    }
}
