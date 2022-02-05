<?php


namespace App\Http\Controllers\Admin\CultureGroup;

use App\Http\Controllers\Controller;
use App\Http\Requests\CultureGroup\StoreRequest;
use App\Models\CultureGroup;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        CultureGroup::firstOrCreate($data);

        return redirect(route('admin.culture_group.index'));
    }
}
