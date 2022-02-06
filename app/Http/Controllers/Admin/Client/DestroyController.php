<?php


namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Admin\Client\BaseController;
use App\Models\Client;

class DestroyController extends BaseController
{
    public function __invoke(Client $client)
    {
        $client->delete();
        return redirect(route('admin.client.index'));
    }
}
