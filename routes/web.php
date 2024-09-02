<?php


use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Models\Company;
use App\Models\Employee;


Route::view('/', 'index');

// Hide the registeration option
Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Companies routes

// group route

Route::controller(CompanyController::class)->group(function () {

    // Index
    Route::get('/companies', 'index');
    // Create
    Route::get('/companies/create', 'create');
    // Show
    Route::get('/companies/{company}', 'show');
    // Store
    Route::post('/companies', 'store');
    // edit
    Route::get('/companies/{company}/edit', 'edit');
    // Update
    Route::patch('/companies/{company}', 'update');
    // Destroy
    Route::delete('/companies/{company}', 'destroy');
});







// Employees routes

Route::resource('employees', EmployeeController::class);

// // Index
// Route::get('/employees', [EmployeeController::class, 'index']);
// // Create
// Route::get('/employees/create', [EmployeeController::class, 'create']);
// // Show
// Route::get('/employees/{employee}', [EmployeeController::class, 'show']);
// // Store
// Route::post('/employees', [EmployeeController::class, 'store']);
// // Edit
// Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit']);
// // Update
// Route::patch('/employees/{employee}', [EmployeeController::class, 'update']);
// // Delete
// Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy']);