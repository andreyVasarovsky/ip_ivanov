<?php

namespace App\Console\Commands;

use App\Imports\ClientsImport;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class ImportClientCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'excel:import:clients';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import excel for Clients';

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
//        Excel::import(new ClientsImport(), public_path('excel/import/clients.xlsx'));
        Excel::import(new ClientsImport(), storage_path('app/excel/import/clients.xlsx'));
        $this->info('Import completed');
        return true;
    }
}
