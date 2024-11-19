<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use File;
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

        //Get all companies from database
        $title = "All Companies";
        $companies = Company::with('employees')->latest()->simplePaginate(10);

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
            'logo' => 'nullable|mimes:png,jpg,jpeg|max:1024',
            'website' => 'nullable|min:5|max:300|string'
        ]);

        if ($request->has('logo')) {
            //create unique name
            $logoName = time() . '.' . $request->logo->getClientOriginalExtension();
            $request->logo->move(public_path('storage/app/public'), $logoName);
            $validated['logo'] = $logoName;
        }

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
        $employees = Employee::all();
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
            'logo' => 'sometimes|max:1024|mimes:png,jpg,jpeg',
            'website' => 'nullable|min:5|max:150'
        ]);

        if ($request->has('logo')) {
            //check old image
            $oldimage = 'storage/app/public' . $company->logo;

            //delete old image
            if (File::exists($oldimage)) {
                File::delete($oldimage);
            }

            //update with new logo
            $newLogo = time() . '.' . $request->logo->getClientOriginalExtension();
            //move logo to server
            $request->logo->move(public_path('storage/app/public'), $newLogo);

            $validated['logo'] = $newLogo;
        }


        $company->update($validated);
        return redirect(route('company.index'))
            ->with('success', 'Company updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //delete logo from server

        if ($company->logo) {
            $savedLogo = 'storage/app/public/' . $company->logo;
            if (File::exists($savedLogo)) {
                File::delete($savedLogo);
            }
        }
        $company->delete();
        return redirect(route('company.index'))
            ->with('success', 'Company deleted successfully');
    }
}
