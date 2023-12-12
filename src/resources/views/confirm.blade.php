@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
    <div class="confirm__content">
        <div class="confirm__heading">
            <p>Confirm</p>
        </div>
        <form class="form" action="/thanks" method="post">
            @csrf
            <div class="confirm-table">
                <table class="confirm-table__inner">
                    <tr>
                        <th>お名前</th>
                        <td>{{ $contact['last_name'] }}{{ $contact['first_name'] }}</td>
                        <input type="hidden" name="last_name" value="{{ $contact['last_name'] }}">
                        <input type="hidden" name="first_name" value="{{ $contact['first_name'] }}">
                    </tr>
                    <tr>
                        <th>性別</th>
                        <td>{{ $contact['gender'] }}</td>
                        <input type="hidden" name="gender" value="{{ $contact['gender'] }}">
                    </tr>
                    <tr>
                        <th>メールアドレス</th>
                        <td>{{ $contact['email'] }}</td>
                        <input type="hidden" name="email" value="{{ $contact['email'] }}">
                    </tr>
                    <tr>
                        <th>電話番号</th>
                        <td>{{ $contact['tel'] }}</td>
                        <input type="hidden" name="tel" value="{{ $contact['tel'] }}">
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td>{{ $contact['address'] }}</td>
                        <input type="hidden" name="address" value="{{ $contact['address'] }}">
                    </tr>
                    <tr>
                        <th>建物名</th>
                        <td>
                            @if ($contact['building'] != null)
                                {{ $contact['building'] }}
                            @endif
                            <input type="hidden" name="building" value="{{ $contact['building'] }}">
                        </td>
                    </tr>
                    <tr>
                        <th>お問い合わせの種類</th>
                        <td>{{ $category['content'] }}</td>
                        <input type="hidden" name="category_id" value="{{ $category['id'] }}">
                    </tr>
                    <tr>
                        <th>お問い合わせ内容</th>
                        <td>{{ $contact['detail'] }}</td>
                        <input type="hidden" name="detail" value="{{ $contact['detail'] }}">
                    </tr>
                </table>
                <div class="form-button__box">
                    <div class="create-button">
                        <button type="submit">送信</button>
                    </div>
                    <div class="correct__form">
                            <button type="submit" name="back" value="back">修正</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
@endsection
