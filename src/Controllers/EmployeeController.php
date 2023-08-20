<?php

namespace Xpeedstudio\Employee\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Xpeedstudio\Employee\Models\Department;
use Xpeedstudio\Employee\Models\Employee;

class EmployeeController extends Controller
{
    // public function __invoke(Employee $employee)
    // {
    //     $employees = $employee->hello();

    //     return view('xpeedstudio/employee::index', compact('employees'));
    // }

    public function index()
    {
        $employees = Employee::all();
        return view('xpeedstudio/employee::employee-index', compact('employees'));
    }

    public function create()
    {
        $departments = Department::all();
        return view('xpeedstudio/employee::employee-create', compact('departments'));
    }

    public function store(Request $request)
    {
        // dd( $request);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'position' => 'required',
            'department_id' => 'required|exists:departments,id',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Employee created successfully.');
    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('xpeedstudio/employee::employee-show', compact('employee'));
    }
}
