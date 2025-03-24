<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data =   DB::connection('mysql_lab1')->table('products')->get();
    dd($data);
});
