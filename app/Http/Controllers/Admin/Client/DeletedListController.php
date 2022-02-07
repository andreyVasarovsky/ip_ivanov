<?php


namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Admin\Client\BaseController;
use App\Models\Client;

class DeletedListController extends BaseController
{
    public function __invoke()
    {
        $clients = Client::all();
        return view('admin.client.index', compact('clients'));
    }
}
