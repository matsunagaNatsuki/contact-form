<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

// お問い合わせフォーム入力画面
Route::get('/', [ContactController::class, 'index']);

// お問い合わせフォーム確認画面
Route::get('/confirm', [ContactController::class, 'confirm']);

// サンクスページ
Route::get('/thanks', [ContactController::class, 'thanks']);

// 管理ページ
Route::middleware('auth')->group(function () {
    Route::get('/admin', [ContactController::class, 'admin']);
});

// ログアウト
Route::post('/logout', function () {
    auth()->logout();
    return redirect('/login');
});

