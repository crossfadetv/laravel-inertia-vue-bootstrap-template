<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Home', [
        'head' => array('title'=>'Home', 'description'=>'Landing Page'),
        'text' => 'Paragraph text as a prop'
    ]);
});

Route::get('/about', function () {
    sleep(3);
    return Inertia::render('About', [
        'text' => 'Paragraph text as a prop'
    ]);
});
