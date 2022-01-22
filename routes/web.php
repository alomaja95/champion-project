<?php

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
*/

Route::get('/all-odds',                          [App\Http\Controllers\Controller::class, 'allOdds']);
Route::get('/add-odds',                          [App\Http\Controllers\Controller::class, 'addOdds']);
Route::post('/add-odds',                         [App\Http\Controllers\Controller::class, 'saveOdds'])->name('saveodds');
Route::get('/edit-odds/{id}',                    [App\Http\Controllers\Controller::class, 'editOdds']);
Route::patch('/all-odds/{id}',                   [App\Http\Controllers\Controller::class, 'updateOdds'])->name('updateodds');

Route::get('/all-merchant',                                 [App\Http\Controllers\Controller::class, 'allMerchant']);
Route::get('/add-merchant',                                 [App\Http\Controllers\Controller::class, 'addMerchant']);
Route::post('/all-merchant',                                [App\Http\Controllers\Controller::class, 'saveMerchant'])->name('savemerchant');
Route::get('/edit-merchant/{id}',                           [App\Http\Controllers\Controller::class, 'editMerchant']);
Route::patch('/all-merchant/{id}',                          [App\Http\Controllers\Controller::class, 'updateMerchant'])->name('updatemerchant');

Route::get('/all-receipt',                                 [App\Http\Controllers\Controller::class, 'allReceipt']);
Route::get('/add-receipt',                                 [App\Http\Controllers\Controller::class, 'addReceipt']);

Route::get('/new-receipt/{id}',                                        [App\Http\Controllers\Controller::class, 'newReceipt']);
Route::post('/all-receipt',                                            [App\Http\Controllers\Controller::class, 'saveReceipt'])->name('savereceipt');
Route::get('/edit-receipt/{id}',                                       [App\Http\Controllers\Controller::class, 'editReceipt']);
Route::get('/admin-edit-receipt/{id}',                                 [App\Http\Controllers\Controller::class, 'adminEditReceipt']);
Route::patch('/all-receipt/{id}',                                      [App\Http\Controllers\Controller::class, 'updateReceipt'])->name('updatereceipt');

Route::get('/print-receipt',                                      [App\Http\Controllers\Controller::class, 'printReceipt']);
Route::get('/print-preview',                                      [App\Http\Controllers\Controller::class, 'printPreview'])->name('printpreview');



Route::get('/search',                                 [App\Http\Controllers\Controller::class, 'search'])->name('search');

Route::patch('/all-odds/',                                      [App\Http\Controllers\Controller::class, 'deleteOdds']);

Route::get('/log-in',                                 [App\Http\Controllers\Controller::class, 'logini']);
Route::get('/reg-login',                                 [App\Http\Controllers\Controller::class, 'regLogin']);

Route::post('/all-merchant',                                [App\Http\Controllers\Controller::class, 'saveMerchant'])->name('savemerchant');

Route::group(['middleware' => ['auth']], function(){
    /**
     * logout*
     */
    Route::get('/logout', [App\Http\Controllers\Controller::class, 'performLogout'])->name('performLogout');
});

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
