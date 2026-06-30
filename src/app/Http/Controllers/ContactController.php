<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Contact;

class ContactController extends Controller
{
    // お問い合わせフォーム入力画面
    public function index()
    {
        $categories = Category::get();

        return view('index', compact('categories'));
    }

    // お問い合わせフォーム送信
    public function contacts(ContactRequest $request)
    {
        // 送信処理
        $contact = $request->only([
            'first_name',
            'last_name',
            'gender',
            'email',
            'tel1',
            'tel2',
            'tel3',
            'address',
            'building',
            'category_id',
            'content'
        ]);

        // dd($contact);
        return redirect('/confirm')->with('contact', $contact);
    }

    // お問い合わせフォーム確認画面
    public function confirm()
    {
        $contact = session('contact');
        // \Log::debug('confirm:category_id='. $contact['category_id']);
        $category = Category::find($contact['category_id']);

        // $contact = $request->only([
        //     'first_name',
        //     'last_name',
        //     'gender',
        //     'email',
        //     'tel1',
        //     'tel2',
        //     'tel3',
        //     'address',
        //     'building',
        //     'category_id',
        //     'content'
        // ]);

        return view('confirm', compact('contact', 'category'));
    }

    // 確認画面のフォーム送信
    public function store(Request $request)
    {
        // 送信処理
        $contact = $request->only([
            'first_name',
            'last_name',
            'gender',
            'email',
            'tel1',
            'tel2',
            'tel3',
            'address',
            'building',
            'category_id',
            'content'
        ]);
        $contact['tel']= $contact['tel1']. $contact['tel2']. $contact['tel3'];

        Contact::create($contact);

        return redirect('/thanks');
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
