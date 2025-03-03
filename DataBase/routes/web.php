<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/pages', function() {
    return view('admin.pages');
});

Route::get('/apprenant/qcm', function () {
    return view('qcm-list');
});

Route::get('/repondre-qcm/{id}', function ($id) {
    return view('qcm.repondre', compact('id')); 
})->name('repondre.qcm');

Route::get('/resultats-qcm', function () {
    return view('resultats-qcm');
})->name('resultats-qcm');


Route::get('/dashboard', function () {
    return view('Dashboard');
});


Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*'); 


Route::get('/contact', function () {
    return view('contact');
});