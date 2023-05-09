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

Route::get('/', function () {

    $messaggio = "Hello World!";

    $data = [
        'messaggio' => $messaggio,
        'alunni' => [
            'Marco',
            'Simone',
            'Daniele',
            'Matteo',
            'Luisa',
            'Gennaro',
            'Francesca',
            'Armando',
            'Lucia'
        ]
    ];

    return view('homepage', $data);
})->name('home');

Route::get('appello', function () {

    $data_odierna = date("d/m/Y");

    $data = [
        'data_odierna' => $data_odierna,
        'alunni' => [
            'Marco',
            'Simone',
            'Daniele',
            'Matteo',
            'Luisa',
            'Gennaro',
            'Francesca',
            'Armando',
            'Lucia'
        ],
        'alunni_presenti' => [
            'Marco',
            'Daniele',
            'Matteo',
            'Francesca',
            'Armando'
        ]
    ];

    return view('appello', $data);
})->name('appello');
