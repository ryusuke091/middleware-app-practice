<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// 管理者ページ（ミドルウェア未適用 - 受講生が実装する）
Route::middleware('admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
});
