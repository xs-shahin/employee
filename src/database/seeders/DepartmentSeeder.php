<?php

namespace Xpeedstudio\Employee\Database\Seeders;

use Illuminate\Database\Seeder;
use Xpeedstudio\Employee\Models\Department;

class DepartmentSeeder extends Seeder
{
    public function run()
    {
        Department::factory()->times(10)->create();
    }
}
