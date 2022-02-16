<?php


namespace App\Http\Controllers\Admin\Fertilizer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Fertilizer\ImportRequest;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;

class ImportController extends Controller
{
    public function __invoke(ImportRequest $request)
    {
        $data = $request->validated();
        Storage::putFileAs('excel/import', $data['file'], 'fertilizers.xlsx');
        Artisan::call('excel:import:fertilizers');
        return redirect(route('admin.fertilizer.index'));
    }
}
