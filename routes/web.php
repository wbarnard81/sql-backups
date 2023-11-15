<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DbinfoController;
use App\Http\Controllers\MysqlController;
use App\Models\Dbinfo;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $dbs = Dbinfo::all();
        return view('dashboard', ['dbs' => $dbs]);
    })->name('dashboard');

    Route::controller(MysqlController::class)->group(function () {
        Route::get('/backups/{id}', 'index')->name('backups');
        Route::post('/backups/create', 'create')->name('backups.create');
    });

    Route::resource('dbinfo', DbinfoController::class);
});
