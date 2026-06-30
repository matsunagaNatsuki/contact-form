@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('title','お問い合わせ確認フォーム')

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Confirm</h2>
    </div>
    <!-- フォームのアクション設定TODO -->
    <form class="" action="/store" method="post" novalidate>
        @csrf
        <table class="confirm__table">
            {{--お名前 確認欄 --}}
            <tr class="form__confirm">
                <th class="form__label--confirm">お名前</th>
                <td class="form__group-confirm">
                    <p>{{ $contact['first_name'] }}　{{ $contact['last_name'] }}</p>
                    <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                    <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                </td>
            </tr>

            {{-- 性別 確認欄 --}}
            <tr class="form__confirm">
                <th class="form__label--confirm">性別</th>
                <td class="form__group-confirm" style="height: 50px;">
                    @if ($contact['gender'] == '0')
                    男性
                    @elseif ($contact['gender'] == '1')
                    女性
                    @else
                    その他
                    @endif
                    <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                </td>
            </tr>

            {{-- メールアドレス 確認欄 --}}
            <tr class="form__confirm">
                <th class="form__label--confirm">メールアドレス</th>
                <td class="form__group-confirm">
                    <p>{{ $contact['email'] }}</p>
                    <input type="hidden" name="email" value="{{ $contact['email'] }}">
                </td>
            </tr>

            {{-- 電話番号 確認欄 --}}
            <tr class="form__confirm">
                <th class="form__label--confirm">電話番号</th>
                <td class="form__group-confirm">
                    <div class="form__confirm--tel">
                        <p>{{ $contact['tel1'] }} <span>-</span> {{ $contact['tel2'] }} <span>-</span> {{ $contact['tel3'] }}</p>
                        <input type="hidden" name="tel1" value="{{ $contact['tel1'] }}">
                        <input type="hidden" name="tel2" value="{{ $contact['tel2'] }}">
                        <input type="hidden" name="tel3" value="{{ $contact['tel3'] }}">
                    </div>
                </td>
            </tr>

            {{-- 住所 確認欄 --}}
            <tr class="form__confirm">
                <th class="form__label--confirm">住所</th>
                <td class="form__group-confirm">
                    <p>{{ $contact['address'] }}</p>
                    <input type="hidden" name="address" value="{{ $contact['address'] }}">
                </td>
            </tr>

            {{-- 建物名 確認欄 --}}
            <tr class="form__confirm">
                <th class="form__label--confirm">建物名</th>
                <td class="form__group-confirm">
                    <p>{{ $contact['building'] }}</p>
                    <input type="hidden" name="building" value="{{ $contact['building'] }}">
                </td>
            </tr>

            {{-- お問い合わせの種類 確認欄 --}}
            <tr class="form__confirm">
                <th class="form__label--confirm">お問い合わせの種類</th>
                <td class="form__group-confirm">
                    <p>{{ $category['content'] }}</p>
                    <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                </td>
            </tr>

            {{-- お問い合わせ 確認欄 --}}
            <tr class="form__confirm">
                <th class="form__label--confirm">お問い合わせ内容</th>
                <td class="form__group-confirm">
                    <p>{{ $contact['content'] }}</p>
                    <input type="hidden" name="content" value="{{ $contact['content'] }}">
                </td>
            </tr>
        </table>

        {{-- フォームボタン --}}
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
            <a class="form__button-edit" href="javascript:history.back();">修正</a>
        </div>
    </form>
</div>
@endsection