<?php

namespace Xpeedstudio\Employee\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Xpeedstudio\Employee\Models\Department;
use Xpeedstudio\Employee\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class EmployeeFactory extends Factory
{
    protected $model = Employee::class;
    protected static $namespace = "Xpeedstudio\Employee\Database\Factories";

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'position' => $this->faker->jobTitle,
            'department_id' => Department::factory(),
        ];
    }
}
