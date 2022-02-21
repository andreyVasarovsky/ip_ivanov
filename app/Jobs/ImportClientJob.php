<?php

namespace App\Jobs;

use App\Imports\ClientsImportOutdated;
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
    private $errors = [];

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
        $import = new ClientsImport();
        $import->import($this->filePath);
        $this->errors = $import->failures();
        $this->updateImportStatus();
    }

    /**
     * Handle a job failure.
     *
     * @param $Exception
     * @return void
     */
    public function failed($Exception)
    {
        $this->updateImportStatus(false);
    }

    private function updateImportStatus($success = true){
        $importStatus = (new ImportStatus())->find($this->importStatusFk);
        if (!empty($importStatus->id)){
            $status = ($success) ? ImportStatus::STATUS_MAP['SUCCESS'] : ImportStatus::STATUS_MAP['FAILED'];
            $importStatus->update(['status' => $status, 'fails' => json_encode($this->errors)]);
        }
    }
}
