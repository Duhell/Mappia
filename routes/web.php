<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){

    return view('LandingView',)
    ->with(['images'=>\Illuminate\Support\Facades\File::files(public_path('restaurants'))]);
});
