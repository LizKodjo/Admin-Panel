<?php

use Illuminate\Support\Facades\Route;

use App\Models\Company;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/companies', function () {
    return view('companies', [
        'companies' => Company::all()
    ]); 
});

Route::get('/companies/{id}', function ($id) {
    
    $company = Company::find($id);
    return view('company', ['company' => $company]);
});


Route::get('/employee', function () {
    return view('employee');
});