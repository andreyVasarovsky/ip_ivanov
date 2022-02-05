<?php


namespace App\Http\Controllers\Admin\CultureGroup;

use App\Http\Controllers\Controller;
use App\Http\Requests\CultureGroup\UpdateRequest;
use App\Models\CultureGroup;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, CultureGroup $group)
    {
        $data = $request->validated();
        $group->update($data);

        return redirect(route('admin.culture_group.index'));
    }
}
