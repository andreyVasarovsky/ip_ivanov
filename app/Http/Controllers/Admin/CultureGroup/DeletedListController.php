<?php


namespace App\Http\Controllers\Admin\CultureGroup;

use App\Http\Controllers\Controller;
use App\Models\CultureGroup;

class DeletedListController extends Controller
{
    public function __invoke()
    {
        $groups = CultureGroup::onlyTrashed()->get();
        return view('admin.culture_group.deleted_list', compact('groups'));
    }
}
