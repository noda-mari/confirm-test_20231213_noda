@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('button')
    <div class="haeder__button">
        <a href="/register">register</a>
    </div>
@endsection

@section('content')
    <div class="login__wrapper">
        <div class="content__title">
            <p>login</p>
        </div>
        <div class="login__form">
            <form action="/login" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <div class="form__error">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form__input--text">
                        <input type="text" name="email" placeholder="例:test@exemple.com">
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">パスワード</span>
                        <div class="form__error">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form__input--text">
                        <input type="text" name="password" placeholder="例:coachtech1106">
                    </div>
                </div>
                <div class="form__button">
                    <button type="submit">ログイン</button>
                </div>
            </form>
        </div>
    </div>
@endsection
