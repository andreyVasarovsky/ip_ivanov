<?php

namespace App\Console\Commands;

use App\Imports\FertilizersImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ImportFertilizerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'excel:import:fertilizers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import import for Fertilizers';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        ini_set('memory_limit', '-1');
//        Excel::import(new FertilizersImport(), public_path('excel/import/fertilizers.xlsx'));
        Excel::import(new FertilizersImport(), storage_path('app/excel/import/fertilizers.xlsx'));
        $this->info('Import completed');
        return true;
    }
}
