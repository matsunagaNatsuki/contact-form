<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    // お問い合わせフォーム入力画面
    public function index()
    {
        return view('index');
    }

    // お問い合わせフォーム確認画面
    public function confirm()
    {
        return view('confirm');
    }

    // サンクスページ
    public function thanks()
    {
        return view('thanks');
    }

    // 管理者画面
    public function admin()
    {
        return view('admin');
    }
}
