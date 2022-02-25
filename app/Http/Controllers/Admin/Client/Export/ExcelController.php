<?php


namespace App\Http\Controllers\Admin\Client\Export;

use App\Models\Client;
use App\Exports\ClientsExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{
    public function __invoke()
    {
        $clients = Client::all();
        return Excel::download(new ClientsExport($clients), 'Clients.xlsx');
    }
}
