<?php

namespace App\Providers;

use App\Contracts\Interfaces\Services\IAuthService;
use App\Contracts\Interfaces\Services\IUserService;
use App\Services\AuthService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->scoped(IAuthService::class, AuthService::class);
        $this->app->scoped(IUserService::class, UserService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
