<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Year;
use App\Models\Make;
use App\Models\Condition;
use App\Models\Body;
use App\Models\Transmission;
//use App\Models\Vehicle;
use App\Models\Color;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $view->with([
                //'vehicles' => Vehicle::get(),
                'years' => Year::get(),
                'makes' => Make::get(),
                'colors' => Color::get(),
                'conditions' => Condition::get(),
                'bodies' => Body::get(),
                'transmissions' => Transmission::get(),
            ]);
        });
    }
}
