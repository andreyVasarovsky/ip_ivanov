<?php


namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Admin\Client\BaseController;
use App\Models\Client;

class DeletedListController extends BaseController
{
    public function __invoke()
    {
        $clients = Client::onlyTrashed()->get();
        return view('admin.client.deleted_list', compact('clients'));
    }
}
