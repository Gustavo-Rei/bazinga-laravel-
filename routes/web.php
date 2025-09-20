<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RewardController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category', [CategoryController::class, 'index'])->name('category.index'
);

Route::get('/rewards', [RewardController::class, 'index'])->name('rewards.index'
);