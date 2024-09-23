<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VehicleController;
use App\Models\Vehicle;

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
    return view('auth-cover-signin');
});

Route::get('/admin.dashboard', [VehicleController::class, 'index'])->name('admin.dashboard');
Route::get('/admin.create-data', [VehicleController::class, 'create'])->name('admin.create-data');
Route::get('table-datatable', [VehicleController::class, 'tableData'])->name('table-data');
Route::get('/admin.{id}.edit-data', [VehicleController::class, 'edit'])->name('admin.edit');
Route::delete('/vehicles/{id}', [VehicleController::class, 'destroy']);



Route::get('admin.edit-data', function () {
    return view('admin.edit-data');
});


/*Components*/
Route::get('/widgets', function () {
    return view('widgets');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/ecommerce-add-new-products', function () {
    return view('ecommerce-add-new-products');
});
Route::get('/component-accordions', function () {
    return view('component-accordions');
});
Route::get('/component-modals', function () {
    return view('component-modals');
});
Route::get('/component-notifications', function () {
    return view('component-notifications');
});
/*Authentication*/
Route::get('/auth-cover-signin', function () {
    return view('auth-cover-signin');
});
Route::get('/auth-cover-signup', function () {
    return view('auth-cover-signup');
});
Route::get('/auth-cover-forgot-password', function () {
    return view('auth-cover-forgot-password');
});
Route::get('/auth-cover-reset-password', function () {
    return view('auth-cover-reset-password');
});
/*Pages*/
Route::get('/user-profile', function () {
    return view('user-profile');
});
/*Un-found*/
Route::get('/test/content-grid-system', function () {
    return view('test/content-grid-system');
});
