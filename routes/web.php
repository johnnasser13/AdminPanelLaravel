<?php

use App\Http\Controllers\AdminToolController;
use Illuminate\Support\Facades\Route;
use App\Models\Data;

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

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    // Existing routes...

    Route::get('/import', function () {
        return view('admin.import');
    })->name('import');

    Route::post('/import', [AdminToolController::class, 'importExcel'])->name('import.post');

    Route::get('/export', [AdminToolController::class, 'exportExcel'])->name('export');
});

// Show Users
Route::get('/admin/users', [AdminToolController::class, 'index'])->name('admin.users.index');



Route::get('/', function () {
    return view('welcome');
});

Route::get('/create', function ()  {
    return view('create');
});

Route::post('/create', function () {
    $data = new Data();
    $data->id = request('id');
    $data->full_name = request('full_name');
    $data->phone_number = request('phone_number');
    $data->email = request('email');
    $data->save();
    echo "Inserted Successfully";
});