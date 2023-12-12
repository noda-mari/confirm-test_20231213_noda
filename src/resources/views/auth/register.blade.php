@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('button')
    <div class="haeder__button">
        <a href="/login">login</a>
    </div>
@endsection

@section('content')
    <div class="register__wrapper">
        <div class="content__title">
            <p>Register</p>
        </div>
        <div class="register__form">
            <form action="/register" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label--item">お名前</span>
                        <div class="form__error">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="form__input--text">
                        <input type="text" name="name" placeholder="例:山田太郎">
                    </div>
                </div>
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
                    <button type="submit">登録</button>
                </div>
            </form>
        </div>
    </div>
@endsection
