@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <div class="prose hero bg-base-200 mx-auto max-w-full rounded">
            <div class="hero-content text-center my-10">
                <h2>クイズを始めますか？</h2>
                {{-- クイズページへのリンク --}}
                <a href="#">START</a>
            </div>
        </div>
    @else
        <div class="prose hero bg-base-200 mx-auto max-w-full rounded">
            <div class="hero-content text-center my-10">
                <div class="max-w-md mb-10">
                    <h2>ワンピースキャラ当て</h2>
                    {{-- ユーザ登録ページへのリンク --}}
                    <a class="btn btn-primary btn-lg normal-case" href="{{ route('register') }}">会員登録</a>
                    {{-- ログインページへのリンク --}}
                    <a class="btn btn-primary btn-lg normal-case" href="{{ route('login') }}">ログイン</a>
                </div>
            </div>
        </div>
    @endif
@endsection
