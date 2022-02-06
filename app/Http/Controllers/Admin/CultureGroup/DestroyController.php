<?php


namespace App\Http\Controllers\Admin\CultureGroup;

use App\Http\Controllers\Controller;
use App\Models\CultureGroup;

class DestroyController extends Controller
{
    public function __invoke(CultureGroup $group)
    {
        $group->delete();
        return redirect(route('admin.culture_group.index'));
    }
}
