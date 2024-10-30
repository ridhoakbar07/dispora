<?php

namespace App\Providers;

use App\Models\User;
use Gate;
use Illuminate\Support\ServiceProvider;
use TomatoPHP\FilamentUsers\Facades\FilamentUser;
use TomatoPHP\FilamentUsers\Resources\UserResource\Table\UserActions;
use TomatoPHP\FilamentUsers\Resources\UserResource\Table\UserFilters;
use TomatoPHP\FilamentUsers\Resources\UserResource\Table\UserTable;

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
        FilamentUser::register([
            \Filament\Resources\RelationManagers\RelationManager::make() // Replace with your custom relation manager
        ]);
        Gate::define('viewPulse', function (User $user) {
            return $user->isSuperAdmin();
        });
    }
}
