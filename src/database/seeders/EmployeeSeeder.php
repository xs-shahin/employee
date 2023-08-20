<?php

namespace Xpeedstudio\Employee\Database\Seeders;

use Illuminate\Database\Seeder;
use Xpeedstudio\Employee\Models\Employee;

class EmployeeSeeder extends Seeder
{
    public function run()
    {
        Employee::factory()->times(10)->create();
    }
}
