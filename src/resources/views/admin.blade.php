@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')
    <div class="contact__wrapper">
        <div class="content__title">
            <p>Admin</p>
        </div>
        <div class="search__form">
            <form action="/contact/search" method="get">
                @csrf
                <div class="form__input-text">
                    <input type="text" name="keyword" placeholder="名前やメールアドレスを入力してください">
                    <button type="submit"><span class="material-icons">
                            search
                        </span>
                        </span></button>
                </div>
                <div class="form__select-gender">
                    <select name="gender">
                        <option value="">全て</option>
                        <option value="1">男性</option>
                        <option value="2">女性</option>
                        <option value="3">その他</option>
                    </select>
                </div>
                <div class="form__select-category">
                    <select name="category_id" id="">
                            <option value="">お問い合わせの種類</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category['id'] }}">{{ $category['content'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form__input-date">
                    <input name="date" type="date" placeholder="日付を選択してください">
                </div>
            </form>
        </div>
        <div class="content__item">
            <div class="export__button">
                <form class="export__form" action="">
                    <button type="submit">エクスポート</button>
                </form>
            </div>
            <div class="paginate__list">
                {{ $contacts->onEachSide(2)->links() }}
            </div>
        </div>
        <div class="contact__table">
            <table>
                <tr class="contact__table-row">
                    <th>お名前</th>
                    <th>性別</th>
                    <th>メールアドレス</th>
                    <th>お問い合わせの種類</th>
                    <th></th>
                </tr>
                @foreach ($contacts as $contact)
                    <tr class="contact__table-row">
                        <td>{{ $contact['last_name'] }}{{ $contact['first_name'] }}</td>
                        <td>{{ config('const.contact.gender')[$contact->gender] }}</td>
                        <td>{{ $contact['email'] }}</td>
                        <td>{{ $contact['category']['content'] }}</td>
                        <td>
                            <button class="modal__open-button js-modal-open">詳細</button>
                        </td>
                    </tr>
                @endforeach
            </table>
            <div class="search__reset">
                <form class="reset__form" action="">
                <button class="search__reset-button" type="submit">リセット</button>
                </form>
            </div>
            <!-- モーダル本体 -->
            <div class="modal js-modal">
                <div class="modal__container">
                    <!-- モーダルを閉じるボタン -->
                    <div class="modal__close-button js-modal-close">×</div>
                    <!-- モーダル内部のコンテンツ -->
                    <div class="modal__content">
                        {{-- <table class="detail__table"
                            <tr>
                                <th>お名前</th>
                                <td>{{ $contact['last_name'] }} {{ $contact['first_name'] }}</td>
                            </tr>
                            <tr>
                                <th>性別</th>
                                <td>{{ $contact['gender'] }}</td>
                            </tr>
                            <tr>
                                <th>メールアドレス</th>
                                <td>{{ $contact['email'] }}</td>
                            </tr>
                            <tr>
                                <th>電話番号</th>
                                <td>{{ $contact['tell'] }}</td>
                            </tr>
                            <tr>
                                <th>住所</th>
                                <td>{{ $contact['address'] }}</td>
                            </tr>
                            <tr>
                                <th>建物名</th>
                                <td>{{ $contact['building'] }}</td>
                            </tr>
                            <tr>
                                <th>お問い合わせの種類</th>
                                <td>{{ $contact['category']['content'] }}</td>
                            </tr>
                            <tr>
                                <th>お問い合わせ内容</th>
                                <td>{{ $contact['detail'] }}</td>
                            </tr>
                            <tr>
                                <form class="contact__delete-button" action="">
                                    <button type="submit">削除</button>
                                </form>
                            </tr>
                        </table> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
