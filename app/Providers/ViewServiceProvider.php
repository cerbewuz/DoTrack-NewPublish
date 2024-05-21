<?php
namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $admin_name = null;
            $employee_name = null;

            $user = Auth::user();
            if ($user) {
                if ($user->usertype == 1) {
                    $admin_name = $user->username;
                } else {
                    $employee_name = $user->username;
                }
            }

            $view->with('admin_name', $admin_name);
            $view->with('employee_name', $employee_name);
        });
    }
}
