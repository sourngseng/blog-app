<?php

use Illuminate\Support\Facades\Route;


Route::get('front-agency', function () {
    return view('front-agency'); // call view : front-agency.blade.php
});
