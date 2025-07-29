<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>確認画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">FashionablyLate</h1>
        </div>
    </header>

    <main>
        <div class="confirm__content">
            <h2 class="confirm__heading">Confirm</h2>

            <form class="form" action="{{ route('contacts.send') }}" method="POST">
                @csrf
                @foreach($inputs as $name => $value)
                <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                @endforeach

                <table class="confirm-table">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お名前</th>
                        <td class="confirm-table__text">{{ $inputs['lastname'] }} {{ $inputs['firstname'] }}</td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">性別</th>
                        <td class="confirm-table__text">{{ $inputs['gender'] }}</td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header" rowspan="2">メールアドレス</th>
                        <td class="confirm-table__text">{{ $inputs['email'] }}</td>
                    </tr>
                    <tr class="confirm-table__row">
                        <td class="confirm-table__text">{{ $inputs['tel1'] }}-{{ $inputs['tel2'] }}-{{ $inputs['tel3'] }}</td>
                    </tr>
                    <tr class="confirm-table__row">
                        <td class="confirm-table__text" colspan="2">{{ $inputs['address'] }}</td>
                    </tr>
                    <tr class="confirm-table__row">
                        <td class="confirm-table__text" colspan="2">{{ $inputs['building'] }}</td>
                    </tr>
                    <tr class="confirm-table__row">
                        <td class="confirm-table__text" colspan="2">{{ $inputs['category'] }}</td>
                    </tr>
                    <tr class="confirm-table__row">
                        <td class="confirm-table__text" colspan="2">{!! nl2br(e($inputs['message'])) !!}</td>
                    </tr>
                </table>

                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信</button>
                </div>
            </form>

            <form class="form" method="POST" action="{{ route('contacts.index') }}">
                @csrf
                @foreach($inputs as $name => $value)
                <input type="hidden" name="{{ $name }}" value="{{ $value }}">
                @endforeach
                <div class="form__button">
                    <button class="form__button-submit" type="submit">修正</button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>