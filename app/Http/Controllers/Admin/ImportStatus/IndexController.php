<?php


namespace App\Http\Controllers\Admin\ImportStatus;


use App\Http\Controllers\Controller;
use App\Models\ImportStatus;

class IndexController extends Controller
{
    public function __invoke()
    {
        $imports = ImportStatus::paginate(10);
        $statuses = ImportStatus::STATUSES_LIST;
        $statusesColors = ImportStatus::STATUSES_COLOR_LIST;
        return view('admin.import_status.index', compact('imports', 'statuses', 'statusesColors'));
    }
}
