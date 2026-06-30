@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('title','お問い合わせ確認フォーム')

@section('content')
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Confirm</h2>
    </div>
    <!-- フォームのアクション設定TODO -->
    <form class="form" action="/store" method="post" novalidate>
        @csrf
        {{--お名前 確認欄 --}}
        <div class="form__confirm">
            <div class="form__confirm-title">
                <span class="form__label--confirm">お名前</span>
            </div>
            <div class="form__group-confirm">
                <div class="form__confirm--text">
                    <div class="form__name--confirm">
                        {{--
                            <input class="first_name" type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                        <input class="last_name" type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                        --}}

                        <p>{{ $contact['first_name'] }}　{{ $contact['last_name'] }}</p>
                        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                    </div>
                </div>
            </div>
        </div>

        {{-- 性別 確認欄 --}}
        <div class="form__confirm">
            <div class="form__label--confirm">
                <span class="form__confirm--item">性別</span>
                <div class="form__group-confirm">
                    @if ($contact['gender'] == 'male')
                    男性
                    @elseif ($contact['gender'] == 'female')
                    女性
                    @else
                    その他
                    @endif
                    <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                </div>
            </div>
        </div>

        {{-- メールアドレス 確認欄 --}}
        <div class="form__confirm">
            <div class="form__confirm-title">
                <span class="form__label--confirm">メールアドレス</span>
            </div>
            <div class="form__group-confirm">
                {{--
                    <div class="form__confirm--text">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
            </div>
            --}}

            <p>{{ $contact['email'] }}</p>
            <input type="hidden" name="email" value="{{ $contact['email'] }}">
        </div>

        {{-- 電話番号 確認欄 --}}
        <div class="form__confirm">
            <div class="form__confirm-title">
                <span class="form__label--confirm">電話番号</span>
            </div>
            <div class="form__group-confirm">
                <div class="form__confirm--tel">
                    {{--
                                <input type="tel" name="tel1" maxlength="3" placeholder="080" readonly />
                                <span>-</span>
                                <input type="tel" name="tel2" maxlength="4" placeholder="1234" readonly />
                                <span>-</span>
                                <input type="tel" name="tel3" maxlength="4" placeholder="5678" readonly />
                            --}}

                    <p>{{ $contact['tel1'] }} <span>-</span> {{ $contact['tel2'] }} <span>-</span> {{ $contact['tel3'] }}</p>
                    <input type="hidden" name="tel1" value="{{ $contact['tel1'] }}">
                    <input type="hidden" name="tel2" value="{{ $contact['tel2'] }}">
                    <input type="hidden" name="tel3" value="{{ $contact['tel3'] }}">
                </div>
            </div>
        </div>

        {{-- 住所 確認欄 --}}
        <div class="form__confirm">
            <div class="form__confirm-title">
                <span class="form__label--confirm">住所</span>
            </div>
            <div class="form__group-confirm">
                <div class="form__confirm--text">
                    {{--
                                <input type="address" name="address" value="{{ $contact['address'] }}" readonly />
                    --}}

                    <p>{{ $contact['address'] }}</p>
                    <input type="hidden" name="address" value="{{ $contact['address'] }}">
                </div>
            </div>
        </div>

        {{-- 建物名 確認欄 --}}
        <div class="form__confirm">
            <div class="form__confirm-title">
                <span class="form__label--confirm">建物名</span>
            </div>
            <div class="form__group-confirm">
                <div class="form__confirm--text">
                    {{--
                                <input type="building" name="building" value="{{ $contact['building'] }}" readonly />
                    --}}

                    <p>{{ $contact['building'] }}</p>
                    <input type="hidden" name="building" value="{{ $contact['building'] }}">
                </div>
            </div>
        </div>

        {{-- お問い合わせの種類 確認欄 --}}
        <div class="form__confirm">
            <div class="form__confirm-title">
                <span class="form__label--confirm">お問い合わせの種類</span>
            </div>
            <div class="form__group-confirm">
                <div class="form__confirm--text">
                    <p>{{ $category['content'] }}</p>
                    <input type="hidden" name="category_id" value="{{ $contact['category_id'] }}">
                </div>
            </div>
        </div>

        {{-- お問い合わせ 確認欄 --}}
        <div class="form__confirm">
            <div class="form__confirm-title">
                <span class="form__label--confirm">お問い合わせ内容</span>
            </div>
            <div class="form__group-confirm">
                <div class="form__confirm--text">
                    <p>{{ $contact['content'] }}</p>
                    <input type="hidden" name="content" value="{{ $contact['content'] }}">
                </div>
            </div>
        </div>

        {{-- フォームボタン --}}
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
            <a class="form__button-edit" href="javascript:history.back();">修正</a>
        </div>
    </form>
</div>
@endsection