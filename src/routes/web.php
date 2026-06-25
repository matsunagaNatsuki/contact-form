<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::middleware('auth')->group(function () {
    // お問い合わせフォーム入力ページ
    Route::get('/', [ContactController::class, 'index']);
    // お問い合わせフォーム確認ページ
    Route::get('/confirm', [ContactController::class, 'confirm']);
    // サンクスページ
    Route::get('/thanks', [ContactController::class, 'thanks']);
    // 管理ページ
    Route::get('/admin', [ContactController::class, 'admin']);
});

