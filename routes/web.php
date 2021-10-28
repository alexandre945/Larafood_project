<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\PlanController;
use Illuminate\Support\Facades\Route;


route::post('/post/store', [PostController::class, 'store'])->name('post.store');
route::get('/post/create', [PostController::class, 'create'])->name('post.create');
route::get('/plans', [PlanController::class, 'index' ])->name('plans.index');

Route::get('/', function () {
    return view('welcome');
});
