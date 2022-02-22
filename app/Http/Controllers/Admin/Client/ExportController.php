<?php


namespace App\Http\Controllers\Admin\Client;

use App\Models\Client;
use App\Exports\ClientsExport;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class ExportController extends Controller
{
    public function __invoke()
    {
        $clients = Client::all();
        return Excel::download(new ClientsExport($clients), 'clients.xlsx');
    }
}
