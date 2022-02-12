<?php


namespace App\Http\Controllers\FastRegistration;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Str;

class CreateController extends Controller
{
    public function __invoke()
    {
        $email = Str::random(8) . '@gmail.com';
        $password = Str::random(8);
        $created = Artisan::call('user:create ' . $email . ' ' . $password);
        if (!$created)
            return redirect(route('fast_registration.index'));
        return view('fast_registration.show', ['email' => $email, 'password' => $password]);
    }
}
