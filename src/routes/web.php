<?php

use Illuminate\Support\Facades\Route;
use Xpeedstudio\Employee\Controllers\EmployeeController;

Route::get('hello', EmployeeController::class);