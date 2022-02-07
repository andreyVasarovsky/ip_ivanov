<?php


namespace App\Http\Controllers\Admin\Fertilizer;


use App\Http\Controllers\Controller;
use App\Models\Fertilizer;

class DeletedListController extends Controller
{
    public function __invoke()
    {
        $fertilizers = Fertilizer::onlyTrashed()->get();
        return view('admin.fertilizer.deleted_list', compact('fertilizers'));
    }
}
