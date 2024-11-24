<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ProfileController;
use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', function () {
    $title = "Homepage";
    return view('welcome', compact('title'));
});

Route::get('/dashboard', function () {
    $title = "Dashboard";
    return view('dashboard', compact('title'));
})->middleware(['auth', 'verified'])->name('dashboard');

//Company routes

// Route::middleware(['auth', 'verified'])->group(function () {
// Route::resource('companies', CompanyController::class)->except('index');
// });
Route::resource('company', CompanyController::class)->middleware(['auth', 'verified']);

//Employee routes
Route::resource('employee', EmployeeController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__ . '/auth.php';
