<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Model\Category;
use App\Model\Page;
use App\Model\Settings;


use Illuminate\Support\Facades\Route;

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
        view()->composer(
            'front.layouts.header',
            function ($view) {
                $view->with('categories', Category::where('status', 1)->get()->sortBy("order"))
                    ->with('settings', Settings::find(1))
                    ->with('pages', Page::where('status', 1)->orderBy('order', 'asc')->get());
            }
        );

        view()->composer(
            'front.layouts.footer', 
            function ($view){
                $view->with('settings', Settings::find(1));
            }
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Route::resourceVerbs([
            'create' => 'Oluştur',
            'edit' => 'Düzenle'

        ]);
    }
}
