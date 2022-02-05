<?php


namespace App\Http\Controllers\Admin;


use App\Models\Client;
use App\Models\CultureGroup;
use App\Models\Fertilizer;
use App\Models\User;

class IndexController
{
    public function index()
    {
        $users = User::all();
        $clients = Client::all();
        $fertilizers = Fertilizer::all();
        $cultureGroups = CultureGroup::all();

        return view('admin/index', compact([
            'users',
            'clients',
            'fertilizers',
            'cultureGroups'
        ]));
    }
}
