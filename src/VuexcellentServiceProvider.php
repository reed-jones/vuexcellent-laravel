<?php

namespace ReedJones\Vuexcellent;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class VuexcellentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('app', function () {
            return "<?= '<div id=\'app\'></div>'; ?>";
        });

        Blade::directive('vuex', function () {
            return "<?='<script id=\'initial-state\'>window.__INITIAL_STATE__='.ReedJones\Vuexcellent\Facades\Vuex::asJson().'</script>';?>";
        });
    }


    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
