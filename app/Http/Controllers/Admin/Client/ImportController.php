<?php


namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Fertilizer\ImportRequest;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class ImportController extends Controller
{
    public function __invoke(ImportRequest $request)
    {
        $data = $request->validated();
        Storage::putFileAs('excel/import', $data['file'], 'clients.xlsx');
        Artisan::call('excel:import:clients');
        return redirect(route('admin.client.index'));
    }
}
