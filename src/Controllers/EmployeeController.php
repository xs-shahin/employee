<?php
namespace Xpeedstudio\Employee\Controllers;

use Illuminate\Http\Request;
use Xpeedstudio\Employee\Employee;

class EmployeeController
{
    public function __invoke(Employee $employee) {
        $employees = $employee->hello();

        return view('xpeedstudio/employee::index', compact('employees'));
    }
}