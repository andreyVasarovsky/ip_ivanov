<?php


namespace App\Http\Controllers\Admin\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\Fertilizer\ImportRequest;
use App\Jobs\ImportClientJob;
use Illuminate\Support\Facades\Storage;

class ImportController extends Controller
{
    public function __invoke(ImportRequest $request)
    {
        $data = $request->validated();
        $path = Storage::putFileAs('/excel/import', $data['file'], 'fertilizers.xlsx');
        ImportClientJob::dispatch(Storage::path($path));
        return redirect(route('admin.client.index'));
    }
}
