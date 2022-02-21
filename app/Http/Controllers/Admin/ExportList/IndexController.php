<?php


namespace App\Http\Controllers\Admin\ExportList;


use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke()
    {
        $exports = [
            ['id' => '1', 'title' => 'Клиенты'],
            ['id' => '2', 'title' => 'Удобрения']
        ];
        return view('admin.export_list.index', ['exports' => $exports]);
    }
}
