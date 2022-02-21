<?php


namespace App\Http\Controllers\Admin\Fertilizer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Fertilizer\ImportRequest;
use App\Jobs\ImportFertilizerJob;
use App\Models\ImportStatus;
use Illuminate\Support\Facades\Storage;

class ImportController extends Controller
{
    public function __invoke(ImportRequest $request)
    {
        $data = $request->validated();
        $path = Storage::putFileAs('/excel/import', $data['file'], 'fertilizers.xlsx');
        $importStatus = ImportStatus::create(['user_id' => Auth()->user()->id]);
//        ImportFertilizerJob::dispatch(Storage::path($path), $importStatus->id);
        ImportFertilizerJob::dispatchNow(Storage::path($path), $importStatus->id);
        return redirect(route('admin.fertilizer.index'))->with('success', 'Данные импортируются!');
    }
}
