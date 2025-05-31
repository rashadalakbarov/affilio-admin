<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\CompanySettings;
use Illuminate\Support\Facades\View;

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
        View::composer('*', function ($view) {
            $company = [
                'name' => CompanySettings::getValue('name'),
                'logo' => CompanySettings::getValue('logo'),
            ];

            $view->with('company', $company);
        });
    }
}
