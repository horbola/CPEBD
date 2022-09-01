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

Route::get('/', function () { return view('index'); });

Route::get('/transformer-accessories', function () { return view('transformer-accessories'); });

Route::get('/Oil-centrifuge', function () { return view('Oil-centrifuge'); });

Route::get('/Oil-test', function () { return view('Oil-test'); });

Route::get('/transformer', function () { return view('transformer'); });

Route::get('/Medium-Low-Voltage-Substation', function () { return view('Medium-Low-Voltage-Substation'); });

Route::get('/High-Voltage-Substation-Solution', function () { return view('High-Voltage-Substation-Solution'); });

Route::get('/HTSwitchgear', function () { return view('HTSwitchgear'); });

Route::get('/LTSwitchgear', function () { return view('LTSwitchgear'); });

Route::get('/PFIPLant', function () { return view('PFIPLant'); });

Route::get('/distribution-board', function () { return view('distribution-board'); });

Route::get('/motor-control', function () { return view('motor-control'); });

Route::get('/energy', function () { return view('energy'); });

Route::get('/voltage-regulator', function () { return view('voltage-regulator'); });

Route::get('/electrical-spareparts', function () { return view('electrical-spareparts'); });

Route::get('/generator', function () { return view('generator'); });

Route::get('/elevator', function () { return view('elevator'); });

Route::get('/solar', function () { return view('solar'); });
