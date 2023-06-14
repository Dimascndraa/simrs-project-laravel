<?php

use App\Http\Controllers\IntelController;
use App\Http\Controllers\PatientController;
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

Route::group(['middleware' => ['web', 'auto.logout']], function () {
    Route::get('/', [IntelController::class, 'welcome'])->name('welcome');
});

require __DIR__ . '/routes.php';
require __DIR__ . '/auth.php';
require __DIR__ . '/default_menu.php';
