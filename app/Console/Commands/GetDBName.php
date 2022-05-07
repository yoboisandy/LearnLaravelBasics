<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class GetDBName extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:get_db_name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'to get current db name';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $database = DB::connection()->getDatabaseName();
        $this->info("The current db name is $database");
    }
}
