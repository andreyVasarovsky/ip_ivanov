<?php


namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Admin\Client\BaseController;
use App\Http\Filters\ClientFilter;
use App\Http\Requests\Client\FilterRequest;
use App\Models\Client;

class IndexController extends BaseController
{
    public function __invoke(FilterRequest $request)
    {
        $query = $request->validated();
        $filter = app()->make(ClientFilter::class, ['queryParams' => array_filter($query)]);
        $clients = Client::filter($filter)->get();
        $regions = [
            'Moscow' => 'Москва',
            'SPB' => 'СПБ'
        ];

        return view('admin.client.index', compact('clients', 'regions', 'query'));
    }
}
