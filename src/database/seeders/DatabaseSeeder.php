<?php

namespace Xpeedstudio\Employee\Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use DepartmentSeeder;
use EmployeeSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            DepartmentSeeder::class,
            EmployeeSeeder::class
        ]);
    }
}
