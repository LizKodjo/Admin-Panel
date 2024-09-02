<?php

namespace App\Providers;

use App\Models\Company;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::preventLazyLoading();

        // configure pagination
        Paginator::useBootstrapFive();

        // Gate::define('edit-employee', function (User $user, Employee $employee) {
        //     return $employee->employee->user->is($user);
        // });

        // Gate::define('edit-company', function (Employee $employee, Company $company) {
        //     return $company->employee->company->is($company);
        // });
    }
}
