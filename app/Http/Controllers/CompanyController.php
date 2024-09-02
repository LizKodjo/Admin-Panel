<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $companies = Company::with('employees')->latest()->simplePaginate(10);

        return view('companies.index', [
            'companies' => $companies
        ]);
    }

    public function create()
    {
        return view('companies.create');
    }

    public function show(Company $company)
    {
        return view('companies.show', ['company' => $company]);
    }
    public function store()
    {
        request()->validate([
            'name' => ['required'],
        ]);

        Company::create([
            'name' => request('name'),
            'email' => request('email'),
            'logo' => request('logo'),
            'website' => request('website')
        ]);
        return redirect('/companies');
    }
    public function edit(Company $company)
    {
        return view('companies.edit', ['company' => $company]);
    }
    public function update(Company $company)
    {
        request()->validate([
            'name' => ['required'],
        ]);

        // Update


        $company->update([
            'name' => request('name'),
            'email' => request('email'),
            'logo' => request('logo'),
            'website' => request('website')
        ]);

        return redirect('/companies/' . $company->id);
    }
    public function destroy(Company $company)
    {
        $company->delete();

        return redirect('/companies');
    }

}
