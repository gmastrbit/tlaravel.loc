<?php

namespace App\Providers;

use App\Helpers\SaveEloquentOrm;
use App\Helpers\SaveFile;
use Illuminate\Support\ServiceProvider;

class SaveStrServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    // треба для реєстрації певних елементів чи сервісів у сервіс-контейнері
    public function register()
    {
        // bind() для прив'язки певної функції до певної комірки сервіс-провайдера
//        $this->app->bind('App\Helpers\Contracts\SaveStr',function(){
       /* $this->app->singleton('SaveStr',function(){
//            return new SaveEloquentOrm();
            return new SaveFile();
        });*/

//       $obj = new SaveFile();
//       $this->app->instance('App\Helpers\Contracts\SaveStr', $obj);
////       dd($this->app['App\Helpers\Contracts\SaveStr']);
//       dd($this->app->make('App\Helpers\Contracts\SaveStr'));

        $this->app->bind('savestr', function(){

            return new SaveFile();
        });

        $this->app->bind('App\Helpers\Contracts\SaveStr', 'App\Helpers\SaveFile');
    }
}
