@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="contact__form-wrapper">
        <div class="content__title">
            <p>Contact</p>
        </div>
        <div class="contact__form">
            <form action="/confirm" method="post">
                @csrf
                <table class="contact__form-table">
                    <tr>
                        <th>お名前<span class="form__input-required">※</span></th>
                        <td>
                            <div class="error">
                            @error('last_name')
                                {{ $message }}
                            @enderror
                            @error('first_name')
                                {{ $message }}
                            @enderror
                            </div>
                            <div class="form__input-box">
                                <input class="form__input-text" type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}">
                                <input class="form__input-text" type="text" name="first_name" placeholder="例:太郎" value="{{ old('first_name') }}">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>性別<span class="form__input-required">※</span></th>
                        <td>
                            <div class="error">
                            @error('gender')
                                {{ $message }}
                            @enderror
                            </div>
                            <input class="form__input-radio" type="radio" name="gender" value="1" checked>男性
                            <input class="form__input-radio" type="radio" name="gender" value="2">女性
                            <input class="form__input-radio" type="radio" name="gender" value="3">その他
                        </td>
                    </tr>
                    <tr>
                        <th>メールアドレス<span class="form__input-required">※</span></th>
                        <td>
                            <div class="error">
                            @error('email')
                                {{ $message }}
                            @enderror
                            </div>
                            <input class="form__input-emil" type="email" name="email" placeholder="例:text@example.com" value="{{ old('email') }}">
                        </td>
                    </tr>
                    <tr>
                        <th>電話番号<span class="form__input-required">※</span></th>
                        <td>
                            <div class="error">
                            @error('tel')
                                {{ $message }}
                            @enderror
                            </div>
                            <div class="form__input-tel">
                                <input type="tel" name="tel" maxlength="5" placeholder="080"><span>-</span><input
                                    type="tel" name="tel" maxlength="5" placeholder="1234"><span>-</span><input
                                    type="tel" name="tel" maxlength="5" placeholder="5678">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th>住所<span class="form__input-required">※</span></th>
                        <td>
                            <div class="error">
                            @error('address')
                                {{ $message }}
                            @enderror
                            </div>
                            <input class="form__input-address" type="text" name="address"
                                placeholder="例:東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}">
                            </td>
                    </tr>
                    <tr>
                        <th>建物名</th>
                        <td>
                            <input class="form__input-building" type="text" name="building" placeholder="例:千駄ヶ谷マンション101">
                        </td>
                    </tr>
                    <tr>
                        <th>お問い合わせの種類<span class="form__input-required">※</span></th>
                        <td>
                            <div class="error">
                            @error('category_id')
                                {{ $message }}
                            @enderror
                            </div>
                            <select class="form__input-category" name="category_id" id="">
                                <option value="">選択してください</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                                @endforeach
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>お問い合わせ内容<span class="form__input-required">※</span></th>
                        <td>
                            <div class="error">
                            @error('detail')
                                {{ $message }}
                            @enderror
                            </div>
                            <textarea class="form__textarea" name="detail" id="" cols="30" rows="5"
                                placeholder="例:お問い合わせ内容をご記載ください" value='{{ old('detail') }}'></textarea>
                        </td>
                    </tr>
                </table>
                <div class="confirm__button">
                <button class="confirm__button-submit" type="submit">確認画面</button>
                </div>
            </form>
        </div>
    </div>
@endsection
