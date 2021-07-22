<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisiteurController;
use App\Http\Controllers\PraticienController;
use App\Http\Controllers\RapportVisiteController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\HomeController;

//route menant à la vue profil
Route::get('/profil', [UsersController::class, 'getProfil']);

//route menant à la vue rapport
Route::get('/rapport', [RapportVisiteController::class, 'index']);

//route menant à la vue praticien
Route::get('/praticien', [PraticienController::class, 'index']);

//route menant à la création de rapport
Route::resource('/rapportRegister', 'RapportVisiteController');

//route menant à la vue de création de rapport
Route::get('/rapportRegister', 'App\Http\Controllers\RapportVisiteController@createRapport');
Route::post('/rapportRegister', 'App\Http\Controllers\RapportVisiteController@RapportForm');

//route menant à la vue praticien
Route::post('/praticien',"PraticienController@praticienParType")->name('practype');

//route menant à la vue pdf
Route::get('/pdf', [RapportVisiteController::class, 'PDF']);

Auth::routes();

//route menant à la page principale
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('');
