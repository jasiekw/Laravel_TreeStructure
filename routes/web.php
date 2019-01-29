<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group([
    'middleware' => 'auth'
], function() {
    
    Route::get('/TreeStructure', 'TreeStructureController@index')->name('TreeStructure.index');
    Route::post('/TreeStructure', 'TreeStructureController@store')->name('TreeStructure.store');
    Route::put('/TreeStructure', 'TreeStructureController@Myupdate')->name('TreeStructure.update');
    Route::patch('/TreeStructure', 'TreeStructureController@Myupdate_2')->name('TreeStructure.update_2');
    Route::delete('/TreeStructure', 'TreeStructureController@MyDestroy')->name('TreeStructure.destroy');
});