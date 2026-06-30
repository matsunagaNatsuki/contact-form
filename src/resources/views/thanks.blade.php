@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('title','サンクスページ')

@section('content')
<div class="thanks__page">
    <p class="thanks__bg">Thank you</p>
    <div class="thanks__page--center">
        <h2>お問い合わせありがとうございました</h2>
        <div class="thanks__home--button">
            <a class="home__button--redirect" href="/">HOME</a>
        </div>
    </div>
</div>
@endsection