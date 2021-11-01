<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\Admin\PlanController;
use Illuminate\Support\Facades\Route;

route::get('/plans/create', [PlanController::class, 'create'])->name('plans.create');
route::put('/plans/update/{url}',[PlanController::class, 'update'])->name('plans.update');
route::get('/plans/edit/{url}',[PlanController::class, 'edit'])->name('plans.edit');
route::any('/plans/search',[PlanController::class, 'search'])->name('plans.search');
route::delete('/plans/delete/{url}',[PlanController::class, 'destroy'])->name('plans.destroy');
route::get('/plans/show/{url}',[PlanController::class, 'show'])->name('plans.show');
route::post('/plans/store',[PlanController::class, 'store'])->name('plans.store');

route::get('/plans', [PlanController::class, 'index' ])->name('plans.index');

route::get('/plans/bread',[PlanController::class, 'index'])->name('bread.index');

Route::get('/', function () {
    return view('welcome');
});
