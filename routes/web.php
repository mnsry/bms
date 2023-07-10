<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/page/{page:slug}', [\App\Http\Controllers\SiteController::class, 'posts'])->name('page.posts');
Route::get('/post/{post:slug}', [\App\Http\Controllers\SiteController::class, 'post'])->name('post.show');

Route::view('/form', 'form.form')->name('form');
Route::post('form',[\App\Http\Controllers\SiteController::class, 'form'])->name('form.store');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
