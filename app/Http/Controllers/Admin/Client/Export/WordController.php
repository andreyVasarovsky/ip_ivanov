<?php


namespace App\Http\Controllers\Admin\Client\Export;

use App\Exports\ClientContractExport;
use App\Models\Client;
use App\Http\Controllers\Controller;

class WordController extends Controller
{
    public function __invoke(Client $client)
    {
        $response = (new ClientContractExport($client))->download();
        if ($response->getContent() && !$response->getData()->status)
            return redirect(route('admin.client.index'))->with('error', $response->getData()->error);
        return $response;
    }
}
