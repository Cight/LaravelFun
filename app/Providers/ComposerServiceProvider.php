<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        View::composer('pages.profile', 'App\Http\ViewComposers\ProfileComposer');
    }
}
