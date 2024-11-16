<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all employees from database
        $title = "All employees";
        $employees = Employee::with('company')->latest()->simplePaginate(10);
        // $employees = $company->employees;
        // $employees = Employee::whereColumn(auth()->company_id())->get();
        // $employees = Employee::whereUserId(auth()->company_id())->get();
        return view('employees.index', compact('employees', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create(Company $company)
    public function create(Company $company)
    {
        // return view('employees.create', ['company' => $company]);
        $title = "Create Employee";
        return view('employees.create', ['company' => $company], compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Company $company, Request $request): RedirectResponse
    {
        //Validation
        $validated = $request->validate([
            'company_id' => Company::factory(),
            'first_name' => 'required|min:2|max:150|string',
            'last_name' => 'required|min:2|max:150|string',
            'email' => 'nullable|email|min:5',
            'phone' => 'nullable|string|min:11'
        ]);
        // $request->$company->employees()->create($validated);
        // $request->company()->employees()->create($validated);

        Employee::create($validated);
        // dd('created');
        return redirect()->route('employees.index', $company)->with('success', 'Employee added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        $title = "Employee Details";
        return view('employees.show', compact('employee', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company, Employee $employee)
    {
        $title = "Edit Employee";
        return view('employees.edit', compact('employee', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'company_id' => Company::factory(),
            'first_name' => 'required|min:2|max:150|string',
            'last_name' => 'required|min:2|max:150|string',
            'email' => 'nullable|email|min:5',
            'phone' => 'nullable|string|min:11'
        ]);
        $employee->update($request->$validated);
        return redirect()->route('company.edit', $employee->company)->with('success', 'Employee updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $company = $employee->company;
        $employee->delete();

        return redirect()->route('company.edit', $company)->with('success', 'Employee deleted');
    }
}
