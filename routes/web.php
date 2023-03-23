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

Route::get('/layout-portfolio', function () {
    return redirect('https://www.figma.com/proto/U6aDZmBA3yvNw97QUjmbzR/Ryan-Palma---Site?page-id=0%3A1&node-id=277-19&viewport=559%2C-276%2C0.15&scaling=contain&starting-point-node-id=809%3A79');
});

Route::middleware('splade')->group(function () {
    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();

    Route::view('/', 'welcome');
    Route::view('/root', 'root');

    require __DIR__ . '/auth.php';
});
