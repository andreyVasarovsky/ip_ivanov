<?php

namespace App\Jobs;

use App\Imports\ClientsImport;
use App\Models\ImportStatus;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Maatwebsite\Excel\Facades\Excel;

class ImportClientJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $filePath;
    public $importStatusFk;

    /**
     * Create a new job instance.
     *
     * @param string $filePath
     * @param $importStatusFk
     */
    public function __construct(string $filePath, $importStatusFk)
    {
        $this->filePath = $filePath;
        $this->importStatusFk = $importStatusFk;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try{
            Excel::import(new ClientsImport(), $this->filePath);
        }catch (\Maatwebsite\Excel\Validators\ValidationException $e){
            $failures = $e->failures();
            dump(1);
            dd($failures);
        }
//        Excel::import(new ClientsImport(), $this->filePath);
        $this->updateImportStatus();
    }

    /**
     * Handle a job failure.
     *
     * @return void
     */
    public function failed($ex)
    {
        $this->updateImportStatus(false);
    }

    private function updateImportStatus($success = true){
        $importStatus = (new ImportStatus())->find($this->importStatusFk);
        if (!empty($importStatus->id)){
            $status = ($success) ? ImportStatus::STATUS_MAP['SUCCESS'] : ImportStatus::STATUS_MAP['FAILED'];
            $importStatus->update(['status' => $status]);
        }
    }
}
