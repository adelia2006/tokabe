<?php

namespace App\Providers;

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
        try {
            if (\Illuminate\Support\Facades\Schema::hasTable('contacts')) {
                $contacts = \App\Models\Contact::all()->keyBy('name');
                \Illuminate\Support\Facades\View::share('siteContacts', $contacts);
            }
        } catch (\Exception $e) {
            // Ignore for initial migrations
        }
    }
}
