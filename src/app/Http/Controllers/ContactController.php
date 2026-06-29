<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Category;

class ContactController extends Controller
{
    // お問い合わせフォーム入力画面
    public function index()
    {
        $categories = Category::select('content')->get();

        return view('index', compact('categories'));
    }

    // お問い合わせフォーム送信
    public function contacts(ContactRequest $request)
    {
        // 送信処理
        $contact = $request->only(['first_name', 'last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building', 'kinds', 'content']);

        // dd($contact);
        return redirect('/confirm')->with('contact', $contact);
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
