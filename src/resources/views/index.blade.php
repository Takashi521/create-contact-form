@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="contact-form__content">
    <h2 class="contact-form__heading">Contact</h2>
    <form class="form" action="{{ route('contacts.confirm') }}" method="POST">
        @csrf

        {{-- お名前 --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content form_name-content">
                <input class="form__input--text" type="text" name="lastname" placeholder="例: 山田" />
                <input class="form__input--text" type="text" name="firstname" placeholder="例: 太郎" />
            </div>
        </div>

        {{-- 性別 --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content gender-radio">
                <input type="radio" id="gender_male" name="gender" value="男性" checked>
                <label for="gender_male">男性</label>

                <input type="radio" id="gender_female" name="gender" value="女性">
                <label for="gender_female">女性</label>

                <input type="radio" id="gender_other" name="gender" value="その他">
                <label for="gender_other">その他</label>
            </div>
        </div>

        {{-- メールアドレス --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <input class="form__input--text" type="email" name="email" placeholder="例: test@example.com" />
            </div>
        </div>

        {{-- 電話番号 --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <input class="form__input--text tel-input" type="tel" name="tel1" maxlength="4" placeholder="080" />
                -
                <input class="form__input--text tel-input" type="tel" name="tel2" maxlength="4" placeholder="1234" />
                -
                <input class="form__input--text tel-input" type="tel" name="tel3" maxlength="4" placeholder="5678" />
            </div>
        </div>

        {{-- 住所 --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <input class="form__input--text" type="text" name="address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" />
            </div>
        </div>

        {{-- 建物名 --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <input class="form__input--text" type="text" name="building" placeholder="例: 千駄ヶ谷マンション101" />
            </div>
        </div>

        {{-- お問い合わせの種類 --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <select class="form__input--select" name="category">
                    <option value="">選択してください</option>
                    <option value="商品について">商品について</option>
                    <option value="返品・交換">返品・交換</option>
                    <option value="その他">その他</option>
                </select>
            </div>
        </div>

        {{-- お問い合わせ内容 --}}
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <textarea class="form__input--textarea" name="message" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
        </div>

        {{-- 確認ボタン --}}
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>
    </form>
</div>
@endsection