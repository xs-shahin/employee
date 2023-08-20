<?php

namespace Xpeedstudio\Employee\Commands;

use Illuminate\Console\Command;
use Xpeedstudio\Employee\Database\Seeders\DatabaseSeeder;

class SeedDatabase extends Command
{
    protected $signature = 'hr:seed';

    protected $description = 'Seed all databases of HR packages';

    public function handle()
    {
        $this->call(DatabaseSeeder::class);
        $this->info('Database of HR packages seeded successfully.');
    }
}
