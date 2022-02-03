<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    if(Auth::check()) {
        if(auth()->user()->is_admin){
            return redirect('/admin/');
        }else{
            return redirect('/user/');
        }
    }else{
        return Redirect::to('login');
    }
});//login page as landing page

Route::get('/closed', function () {
    $hours = DB::table('opening_hours')->get();
    return view('user.closed',compact('hours'));
})->name('closed');//login page as landing page

//Auth Route
Auth::routes();

Route::middleware(['auth'])->group(function () {
    //After Login the routes are accept by the loginUsers...

    Route::group([ 'middleware' => 'is_admin', 'prefix' => 'admin','as' => 'admin.'], function () {

        include 'admin.routes.php'; // separated admin routes

    });

});

Route::get('/clear', function () {

    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('route:cache');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('view:cache');
    Artisan::call('optimize:clear');
    return "Cache is cleared";

});//Clear Cache
