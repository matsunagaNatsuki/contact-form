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
    <form class="form">
        <!-- お名前 入力欄 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <div class="form__name--input">
                        <input class="first_name" type="text" name="first_name" placeholder="例: 山田" />
                        <input class="last_name" type="text" name="last_name" placeholder="例: 太郎" />
                    </div>
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>

        <!-- 性別 ラジオボタン -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--radio">
                    <label>
                        <input type="radio" name="gender" value="male" checked>
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
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>

        <!-- メールアドレス 入力欄 -->
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
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>

        <!-- 電話番号 入力欄 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="tel" name="tel1" placeholder="080" />
                    <p>-</p>
                    <input type="tel" name="tel2" placeholder="1234" />
                    <p>-</p>
                    <input type="tel" name="tel3" placeholder="5678" />
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>

        <!-- 住所 入力欄 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="tel" name="tel" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" />
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>

        <!-- 建物名 入力欄 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="tel" name="tel" placeholder="例: 千駄ヶ谷マンション101" />
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>

        <!-- お問い合わせの種類　プルタブ選択 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <!-- プルタブTODO -->
                </div>
                <div class="form__error">
                    <!--バリデーション機能を実装したら記述します。-->
                </div>
            </div>
        </div>

        <!-- お問い合わせ 入力欄 -->
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="content" placeholder="お問い合わせ内容をご記載ください"></textarea>
                </div>
            </div>
        </div>

        <!-- お問い合わせ 送信ボタン -->
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>

@endsection