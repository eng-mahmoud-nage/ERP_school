<?php

namespace App\Providers;

use App\SuperAdmin;
use App\StudentAffairs\Setting;

use App\StudentAffairs\AcademicYear;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

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
        Schema::defaultStringLength(191);
        // // share setting data table
        $setting = Setting::first();
        if($setting){ view()->share('setting', $setting); }
        // // share academic active year
        $activeYear= AcademicYear::where('active',1)->first();
        if($activeYear){ view()->share('activeYear', $activeYear); }
        // // share academic active year
        $supersetting= SuperAdmin::first();
        if($supersetting){ view()->share('supersetting', $supersetting);
        if($supersetting->lang == 'Arabic')
            app()->setLocale('ar');
        }else{
            app()->setLocale('en');
        }
    }
}
