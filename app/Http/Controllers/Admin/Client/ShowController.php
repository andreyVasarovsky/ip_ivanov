<?php


namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Admin\Client\BaseController;
use App\Models\Client;

class ShowController extends BaseController
{
    public function __invoke(Client $client)
    {
        return view('admin.client.show', compact('client'));
    }
}
