<?php

use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\DB as FacadesDB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $data =   FacadesDB::connection('mysql_lab1')->table('products')->get();
    dd($data);
});
