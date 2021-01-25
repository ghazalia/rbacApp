<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Rbac\UserController;
use App\Http\Controllers\Rbac\RoleController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
});

// // Users
// Route::post('/users', [App\Http\Controllers\Rbac\UserController::class, 'store'])->name('users:store');
// Route::get('/users/create', [App\Http\Controllers\Rbac\UserController::class, 'create'])->name('users:create');


// // Roles
// Route::get('/roles', [App\Http\Controllers\Rbac\RoleController::class, 'create'])->name('roles:create');

// // Permissions
// Route::get('/permissions/create', [PermissionController::class, 'create'])->name('permissions:create');
// Route::post('permissions/create', [PermissionController::class, 'store'])->name('permissions:store');
// Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions:index');

Route::get('/dashboard', function () {
    return view('admin.layout');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
