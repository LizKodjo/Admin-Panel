<?php

namespace App\Policies;

use App\Models\Company;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CompanyPolicy
{
    public function view(User $user, Company $company)
    {
        return $company->employee->company->is($company);
    }
}
