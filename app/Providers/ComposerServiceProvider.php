<?php

namespace App\Providers;
use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
         View::composer(['pages.profile','pages.abeer','blade.bladetest'],'App\Http\ViewComposers\ProfileComposer');
    }


    public function register()
    {

    }
}
