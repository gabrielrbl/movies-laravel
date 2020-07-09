<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider {
    public function register() {

    }

    public function boot() {
        Schema::defaultStringLength(191);

        View::share('generos', \App\Models\Genero::all());
    }
}
