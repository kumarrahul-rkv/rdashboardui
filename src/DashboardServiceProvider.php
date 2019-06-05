<?php

namespace Kumarrahul\rdashboardui;

use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'rdashboardui');
        $this->publishes([
            __DIR__.'/assets' => public_path('assets'),
            __DIR__.'/resources/views' => resource_path('views/kumarrahul/rdashboardui'),
        ], 'rdashboardui');
    }
    public function register() {

    }

}
