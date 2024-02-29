<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EController;
use App\Http\Controllers;
use App\Http\Controllers\ActicleController;
use App\Http\Controllers\PreviewController;
use App\Http\Controllers\AuthController;
use App\Models\Preview;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\LoginMiddleware;
use App\Http\Middleware\SignMiddleware;
use App\Http\Controllers\UserController;

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

Route::get('/home', [
    HomeController::class,
    'Home'
])->name('home')->middleware(AuthMiddleware::class);

Route::get('/actors/IU', function () {
    return view('actors.IU');
})->name('iu')->middleware(AuthMiddleware::class);

Route::get('/actors/sohee', function () {
    return view('actors.sohee');
})->name('sohee')->middleware(AuthMiddleware::class);

Route::get('/author', [
    HomeController::class,
    'Author'
])->name('author')->middleware(AuthMiddleware::class);

Route::get('/category', [
    CategoryController::class,
    'Category'
])->name('category')->middleware(AuthMiddleware::class);

Route::get('/acticle', [
    ActicleController::class,
    'Acticle'
])->name('acticle')->middleware(AuthMiddleware::class);

Route::get('/preview',[
    PreviewController::class,
    'Preview'
] )->name('item')->middleware('login');

Route::get('/',[
    AuthController::class,
    'admin'
])->name('auth.admin')->middleware(LoginMiddleware::class);

Route::post('/admin',[
    AuthController::class,
    'login'
])->name('auth.login');

Route::get('/logout',[
    AuthController::class,
    'logout'
])->name('auth.logout');

Route::get('/user/index', [
    UserController::class,
    'index'
])->name('user.index')->middleware(AuthMiddleware::class);

Route::post('/user/add',[
    UserController::class,
    'add'
])->name('user.add');

Route::get('/edit/{id}', [
    UserController::class,
    'edit'
])->name('user.edit')->middleware(AuthMiddleware::class);

Route::post('/update/{id}', [
    UserController::class,
    'update'
])->name('user.update');

Route::get('/delete/{id}', [
    UserController::class,
    'delete'
])->name('user.delete')->middleware(AuthMiddleware::class);

Route::post('/user/destroy/{id}',[
    UserController::class,
    'destroy'
])->name('user.destroy');

Route::get('/admin/sign', [AuthController::class,'sign'])->name('auth.sign')->middleware(SignMiddleware::class);

Route::post('/admin/sign', [AuthController::class,'signin'])->name('auth.signin');