<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [EmployeeController::class, 'getEmployees'])->name('employee.view');
Route::get('/create', [EmployeeController::class, 'getAddPage'])->name('employee.add.page');
Route::post('/add-employee', [EmployeeController::class, 'addEmployee'])->name('employee.add');
Route::patch('/updateEmplyee/{id}', [EmployeeController::class, 'getUpdatePage'])->name('employee.update.page');
Route::get('/update/{id}', [EmployeeController::class, 'updateEmployeee'])->name('employee.update');
Route::delete('/delete/{id}', [EmployeeCOntroller::class, 'deleteEmployee'])->name('employee.delete');
