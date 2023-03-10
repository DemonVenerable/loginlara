<?php

namespace App\Providers;

use App\Services\Impl\UserServiceImpl;
use App\Services\UserService;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;


class UserServiceProvider extends ServiceProvider implements DeferrableProvider
{   
    public array $singleton = [
        UserService::class => UserServiceImpl::class
    ];

    public function provider(): array
    {
        return [UserService::class];
    }
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
