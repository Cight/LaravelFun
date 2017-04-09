<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;

class ComposerServiceProvider extends ServiceProvider
{
    public function boot()
    {

        View::creator('blade.blade', 'App\Http\ViewComposers\BladeComposer');

    }
}
