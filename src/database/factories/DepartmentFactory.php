<?php
namespace Xpeedstudio\Employee\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Xpeedstudio\Employee\Models\Department;

class DepartmentFactory extends Factory
{
    protected $model = Department::class;
    // protected static $namespace = "Xpeedstudio\\Employee\\";
    protected static $namespace = "Xpeedstudio\Employee\Database\Factories";

    public function definition()
    {
        return [
            'name' => $this->faker->word,
        ];
    }
}