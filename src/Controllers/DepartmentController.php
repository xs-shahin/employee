<?php

namespace Xpeedstudio\Employee\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Xpeedstudio\Employee\Models\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all();
        return view('xpeedstudio/employee::department-index', compact('departments'));
    }
    public function create()
    {
        return view('xpeedstudio/employee::department-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:departments',
        ]);

        Department::create($request->all());

        return redirect()
            ->back()
            ->with('success', 'Department created successfully.');
    }

    public function show($id)
    {
        $department = Department::findOrFail($id);
        return view('xpeedstudio/employee::department-show', compact('department'));
    }
}
