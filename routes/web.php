<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/proyectos/{category}', [App\Http\Controllers\HomeController::class, 'proyectByCategory'])->name('proyectos.category');
Route::get('/proyecto/{postId}', [App\Http\Controllers\HomeController::class, 'proyecto'])->name('proyecto');
Route::post('/message', [App\Http\Controllers\HomeController::class, 'contact'])->name('user.message');

Route::get('/panel', function () {
    return view('panel');
})->middleware('auth');

//Rutas de categorias del administrador
Route::get('/admin/categories', [App\Http\Controllers\Admin\CategoriesController::class, 'index'])->name('admin.categories.index');
Route::post('/admin/categories/store', [App\Http\Controllers\Admin\CategoriesController::class, 'store'])->name('admin.categories.store');
Route::post('/admin/categories/{categoryId}/update', [App\Http\Controllers\Admin\CategoriesController::class, 'update'])->name('admin.categories.update');
Route::delete('/admin/categories/{categoryId}/delete', [App\Http\Controllers\Admin\CategoriesController::class, 'delete'])->name('admin.categories.delete');

//Rutas de proyectos del administrador
Route::get('/admin/posts', [App\Http\Controllers\Admin\PostsController::class, 'index'])->name('admin.posts.index');
Route::post('/admin/posts/store', [App\Http\Controllers\Admin\PostsController::class, 'store'])->name('admin.posts.store');
Route::post('/admin/posts/{postId}/update', [App\Http\Controllers\Admin\PostsController::class, 'update'])->name('admin.posts.update');
Route::delete('/admin/posts/{postId}/delete', [App\Http\Controllers\Admin\PostsController::class, 'delete'])->name('admin.posts.delete');

//Rutas de mensajes del administrador
Route::get('/admin/messages', [App\Http\Controllers\Admin\MessagesController::class, 'index'])->name('admin.messages.index');
Route::delete('/admin/messages/{messageId}/delete', [App\Http\Controllers\Admin\MessagesController::class, 'delete'])->name('admin.message.delete');
Auth::routes();

Route::get('new', function () {
    return view('welcome');
});
