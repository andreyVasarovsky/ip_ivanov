<?php


namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Admin\Client\BaseController;
use App\Http\Requests\Client\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $this->service->store($data);
        return redirect(route('admin.client.index'));
    }
}
