<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('adminlte::page');
});

Route::get('/admin/pages', function() {
    return view('admin.pages');
});
