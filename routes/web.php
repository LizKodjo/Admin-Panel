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
    Route::post('/companies', 'store')->middleware('auth');

    // edit
    Route::get('/companies/{company}/edit', 'edit')
        ->middleware('auth')
        ->can('edit', 'company');

    // Update
    Route::patch('/companies/{company}', 'update')
        ->middleware('auth')
        ->can('edit', 'company');

    // Destroy
    Route::delete('/companies/{company}', 'destroy')
        ->middleware('auth')
        ->can('edit', 'company');
});







// Employees routes

//Route::resource('employees', EmployeeController::class);

// Index
Route::get('/employees', [EmployeeController::class, 'index']);
// Create
Route::get('/employees/create', [EmployeeController::class, 'create']);
// Show
Route::get('/employees/{employee}', [EmployeeController::class, 'show']);
// Store
Route::post('/employees', [EmployeeController::class, 'store'])->middleware('auth');
// Edit
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'employee');

// Update
Route::patch('/employees/{employee}', [EmployeeController::class, 'update'])
    ->middleware('auth')
    ->can('edit', 'employee');

// Delete
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])
    ->middleware('auth')
    ->can('edit', 'employee');