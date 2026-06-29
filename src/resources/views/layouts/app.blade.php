<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/layouts/app.css') }}" />
    @yield('css')
</head>

<body>
    {{--ヘッダーをlayouts継承 --}}
    <header class="header__common">
        <div class="header__title">
            <h1>FashionablyLate</h1>
        </div>

        {{-- ログイン中はログアウトボタンを表示 --}}
        @if (auth()->check())
        <form class="form" method="POST" action="/logout">
            @csrf
            <button class="header__logout">logout</button>
        </form>

        {{-- 登録画面の時はlogin画面にリダイレクト --}}
        @elseif (request()->routeIs('register'))
        <a class="header__redirect" href="/login">login</a>

        {{-- ログイン画面の時はregister画面にリダイレクト --}}
        @elseif (request()->routeIs('login'))
        <a class="header__redirect" href="/register">register</a>
        @endif
    </header>

    {{--メインのcontentを継承 --}}
    <main>
        @yield('content')
    </main>
</body>