<?php

use Illuminate\Support\Facades\Route;

Route::get('/', static function ($account){
   return "{$account} web";
});
