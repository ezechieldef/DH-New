<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Laravel\Telescope\Telescope;
use Laravel\Telescope\TelescopeApplicationServiceProvider;

class TelescopeServiceProvider extends TelescopeApplicationServiceProvider
{
    public function register(): void
    {
        Telescope::night();
        $this->hideSensitiveRequestDetails();
    }

    protected function hideSensitiveRequestDetails(): void
    {
        if ($this->app->isLocal()) {
            return;
        }
        Telescope::hideRequestParameters(['_token','password','password_confirmation']);
        Telescope::hideRequestHeaders(['authorization','cookie','x-csrf-token','x-xsrf-token']);
    }

    public function boot(): void
    {
        parent::boot();

        Gate::define('viewTelescope', function ($user = null) {
            if ($this->app->environment('local')) {
                return true;
            }
            return $user && method_exists($user, 'hasRole') && $user->hasRole('admin');
        });
    }
}