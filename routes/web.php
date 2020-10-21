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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//--------------------------------------------------------------------------
//на страницу контроля данных
Route::get('/FormControlData',function (){
    return view('FormControlData');
})->name('FormControlData');
//----------------------------------------------------------------------------
Route::post('/controldata','App\Http\Controllers\ControlDataController@control')->name('controldata');

//------------------------------------------------------------------------------------------------------
//при вызове индекса улетаем в контроллер он берет базу и сливает на wellcom
Route::get('/','App\Http\Controllers\BookController@showbook')->name('BookController');
//------------------------------------------------------------
//роут на контроллер фильтра книг
Route::post('/filterbooks','App\Http\Controllers\FilterBooksController@filterbooks')->name('filterbooks');
//------------------------------------------------------------
//роут на контроллер для получения всех книг из БД с дальнейшим редактированием и удалением
Route::get('/EditDeleteData','App\Http\Controllers\EditDeleteDataController@showdata')->name('EditDeleteData');
//------------------------------------------------------------
//ссылкой отправляю id книги которую надо удалить
Route::get('/DeleteData/{id}','App\Http\Controllers\EditDeleteDataController@deletedata')->name('DeleteData');
//------------------------------------------------------------
//ссылкой отправляю id книги которую надо отредактировать
Route::get('/EditData/{id}','App\Http\Controllers\EditDeleteDataController@editdata')->name('EditData');
//-----------------------------------------------------------------
//роут на контроллер сохранения новой редакции книги
Route::post('/NewEditionBook/{id}','App\Http\Controllers\NewEditionBookController@NewEdition')->name('NewEditionBook');
//------------------------------------------------------------
