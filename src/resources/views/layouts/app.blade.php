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
    <!-- ヘッダーを全画面layouts継承 -->
    <header class="header__common">
        <div class="header__title">
            <h1>FashionablyLate</h1>
        </div>
        <a class="header__logout" href="/login">login</a>
    </header>

    <!-- メインのcontentを継承 -->
    <main>
        @yield('content')
    </main>
</body>