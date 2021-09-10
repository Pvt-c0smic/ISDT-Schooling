<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin'],function(){
    foreach (glob(__DIR__ . "/admin/*.php") as $filename) {
        include $filename;
    }
});

foreach (glob(__DIR__ . "/site/*.php") as $filename) {
    include $filename;
}