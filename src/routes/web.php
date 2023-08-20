<?php

use Illuminate\Support\Facades\Route;
use Xpeedstudio\Employee\Controllers\DepartmentController;
use Xpeedstudio\Employee\Controllers\EmployeeController;

// Route::get('hello', EmployeeController::class);

Route::resource('employees', EmployeeController::class);
Route::resource('departments', DepartmentController::class);