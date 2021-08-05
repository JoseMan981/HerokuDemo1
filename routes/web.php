<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Welcome;
use App\Http\Controllers\GamExperiences;
use App\Http\Controllers\News;
use App\Http\Controllers\PoliticsLibrary;
use App\Http\Controllers\Articles;

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

Route::get('/', function () { return redirect('/es'); });
Route::get('/{locale}', 					[ Welcome::class, 		 'index' ] );
Route::get('/IATA/{IATA}', 					[ Welcome::class, 		 'qIATA' ] );


Route::get('/{locale}/gam', 				[ GamExperiences::class, 'index' ] );
Route::get('/{locale}/noticias', 			[ News::class, 			 'index' ] );
Route::get('/{locale}/biblioteca', 			[ PoliticsLibrary::class,'index' ] );
Route::get('/{locale}/article/{urlName}', 	[ Articles::class, 		 'index' ] );

Route::post('/{locale}/article/{urlName}/{id}', 	[ Articles::class, 		 'update' ] );


