@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('title','お問い合わせフォーム')

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/contacts" method="post" novalidate>
        @csrf
        {{--お名前 入力欄 --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <div class="form__name--input">
                        <input class="first_name" type="text" name="first_name" placeholder="例: 山田" />
                        <div class="form__error">
                            @error('first_name')
                            {{ $message }}
                            @enderror
                        </div>
                        <input class="last_name" type="text" name="last_name" placeholder="例: 太郎" />
                        <div class="form__error">
                            @error('last_name')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- 性別 ラジオボタン --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <label>
                        <input type="radio" name="gender" value="male">
                        男性
                    </label>
                    <label>
                        <input type="radio" name="gender" value="female">
                        女性
                    </label>
                    <label>
                        <input type="radio" name="gender" value="other">
                        その他
                    </label>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        {{-- メールアドレス 入力欄 --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="test@example.com" />
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        {{-- 電話番号 入力欄 --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--tel">
                    <input type="tel" name="tel1" maxlength="3" placeholder="080" />
                    <span>-</span>
                    <input type="tel" name="tel2" maxlength="4" placeholder="1234" />
                    <span>-</span>
                    <input type="tel" name="tel3" maxlength="4" placeholder="5678" />
                </div>
                <div class="form__error">
                    {{-- いづれかの電話番号のフォームが欠けていたらバリデーションエラーを表示する --}}
                    @if ($errors->has('tel1') || $errors->has('tel2') || $errors->has('tel3'))
                    {{ $errors->first('tel1') ?: $errors->first('tel2') ?: $errors->first('tel3') }}
                    @endif
                </div>
            </div>
        </div>

        {{-- 住所 入力欄 --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="address" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" />
                </div>
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        {{-- 建物名 入力欄 --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="building" name="building" placeholder="例: 千駄ヶ谷マンション101" />
                </div>
            </div>
        </div>

        {{-- お問い合わせの種類 プルタブ選択 --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__option--select">
                    <select name="kinds">
                        <option value="">選択してください</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->content }}">
                            {{ $category->content }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form__error">
                    @error('kinds')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        {{-- お問い合わせ 入力欄 --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
                </div>
                <div class="form__error">
                    @error('content')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

        {{-- お問い合わせ 送信ボタン --}}
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection