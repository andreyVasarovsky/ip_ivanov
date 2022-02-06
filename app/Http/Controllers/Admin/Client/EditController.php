<?php


namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Admin\Client\BaseController;
use App\Models\Client;

class EditController extends BaseController
{
    public function __invoke(Client $client)
    {
        return view('admin.client.edit', compact('client'));
    }
}
