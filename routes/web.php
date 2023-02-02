<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\CompaniesController;
use Illuminate\Support\Facades\Storage;
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
Route::get('/', function () {return view("companies.index");});
Route::controller(CompaniesController::class)->group(function () {
    Route::get('api/v1/companies/index', 'index');
    Route::delete('api/v1/companies/delete/{id}', 'destroy');
    Route::post('api/v1/companies/create', 'store');
    Route::get('api/v1/companies/show/{id}', 'show');
    Route::patch('api/v1/companies/update/{id}', 'update');
});




