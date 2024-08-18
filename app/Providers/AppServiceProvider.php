<?php

namespace App\Providers;

use App\Models\Account;
use Illuminate\Support\ServiceProvider;
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
        View::composer('WebSite.layouts.footer', function ($view) {
            $account = Account::findOrFail(1); // استبدال الرقم بالمعرف الصحيح لحساب الشركة
            $view->with('account', $account);
        });
    }
}
