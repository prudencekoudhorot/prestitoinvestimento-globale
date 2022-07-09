<?php

use App\Http\Controllers\Frontend_deController;
use App\Http\Controllers\Frontend_frController;
use App\Http\Controllers\Frontend_itController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/


 //frontend_fr
Route::any('fr', [Frontend_frController::class, 'index_fr'])->name('accueil');
//a propos
Route::any('a-propos/fr', [Frontend_frController::class, 'apropos'])->name('apropos');
//temoignages
Route::any('temoignages/fr', [Frontend_frController::class, 'temoignages'])->name('temoignages');
//contact
Route::any('contact/fr', [Frontend_frController::class, 'contact'])->name('contact');
//Store contact
Route::any('contact/store/fr', [Frontend_frController::class, 'store'])->name('store.contact');

//frontend_it
Route::any('/', [Frontend_itController::class, 'index'])->name('accueil_it');
//a propos
Route::any('di/it', [Frontend_itController::class, 'apropos'])->name('apropos_it');
//temoignages
Route::any('testimonianze/it', [Frontend_itController::class, 'temoignages'])->name('temoignages_it');
//contact
Route::any('contatto/it', [Frontend_itController::class, 'contact'])->name('contact_it');
//Store contact
Route::any('contatto/registrazione/it', [Frontend_itController::class, 'store'])->name('store.contact_it');


//frontend_de
Route::any('/de', [Frontend_deController::class, 'index_de'])->name('accueil_de');
//a propos
Route::any('um/de', [Frontend_deController::class, 'apropos'])->name('apropos_de');
//temoignages
Route::any('Referenzen/de', [Frontend_deController::class, 'temoignages'])->name('temoignages_de');
//contact
Route::any('Kontakt/de', [Frontend_deController::class, 'contact'])->name('contact_de');
//Store contact
Route::any('Kontakt/anmeldung/de', [Frontend_deController::class, 'store'])->name('store.contact_de');


