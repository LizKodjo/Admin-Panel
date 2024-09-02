<?php

namespace App\Policies;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class EmployeePolicy
{
    public function edit(User $user, Employee $employee): bool
    {
        return $employee->employee->user->is($user);
    }
}
