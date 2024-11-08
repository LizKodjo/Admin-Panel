<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Storage;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(auth()->id());
        //Get all companies from database
        $title = "All Companies";
        $companies = Company::with('employees')->latest()->simplePaginate(10);
        // $companies = Company::with('employees');
        // $companies = Company::all()->simplePagination(10);
        // $employees = Employee::where('company_id', auth()->id())->get();
        return view('companies.index', compact(['companies', 'title']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Create Company";
        return view('companies.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validation
        $validated = $request->validate([
            'name' => 'required|string|min:5|max:150',
            'email' => 'nullable|email|min:3',
            // 'logo' => 'nullable|min:5|image|mimes:png,jpg',
            'logo' => 'nullable|image|mimes:png,jpg',
            'website' => 'nullable|min:5|max:150'
        ]);

        //Create company
        Company::create(
            $validated
        );

        return redirect(route('company.index'))
            ->with('success', 'Company created successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        // dd($company);
        $title = "Company Details";
        return view('companies.show', compact(['company', 'title']));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        // $this->authorize('update', $company);
        $title = "Edit Company";
        $employees = $company->employees()->paginate(10);
        return view('companies.edit', ['company' => $company, 'employees' => $employees], compact(['company', 'title']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        // $this->authorize('update', $company);
        $validated = $request->validate([
            'name' => 'required|string|min:5|max:150',
            'email' => 'nullable|email|min:3',
            'logo' => 'nullable|min:5|mimes:png,jpg',
            'website' => 'nullable|min:5|max:150'
        ]);
        $company->update($validated);
        return redirect(route('company.index'))
            ->with('success', 'Company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect(route('company.index'))
            ->with('success', 'Company deleted successfully');
    }
}
