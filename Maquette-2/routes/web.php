<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('adminlte::page');
});

Route::get('/admin/pages', function() {
    return view('admin.pages');
});

Route::get('/apprenant/qcm', function () {
    return view('qcm-list');
});

// Route pour afficher la page de réponse au QCM
Route::get('/repondre-qcm/{id}', function ($id) {
    return view('qcm.repondre', compact('id')); // Passer l'ID du QCM à la vue
})->name('repondre.qcm');

