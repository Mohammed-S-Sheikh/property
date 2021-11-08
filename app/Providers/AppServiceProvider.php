<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Mixins\JsonResponseMixin;
use Illuminate\Support\Facades\Response;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::mixin(new JsonResponseMixin());
    }
}
