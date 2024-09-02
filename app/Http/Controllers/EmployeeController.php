<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('company')->latest()->simplePaginate(10);

        return view('employees.index', [
            'employees' => $employees
        ]);
    }
    public function create()
    {
        return view('employees.create');
    }
    public function show(Employee $employee)
    {
        return view('employees.show', ['employee' => $employee]);
    }
    public function store()
    {
        request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required']
        ]);

        Employee::create([

            //'company_id' => 1,
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            'company_id' => 1,
            'email' => request('email'),
            'phone' => request('phone'),


        ]);

        return redirect('/employees');
    }
    public function edit(Employee $employee)
    {
        return view('employees.edit', ['employee' => $employee]);
    }
    public function update(Employee $employee)
    {
        request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required']
        ]);

        $employee->update([
            'first_name' => request('first_name'),
            'last_name' => request('last_name'),
            // 'company_id' => request('company_id'),
            'email' => request('email'),
            'phone' => request('phone')
        ]);

        return redirect('employees/' . $employee->id);
    }
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect('/employees');
    }

}
