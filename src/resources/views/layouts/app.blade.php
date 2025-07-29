<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>FashionablyLate</title>
    <style>
        h1,
        .contact-form__heading {
            font-family: "Times New Roman", serif;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1 class="header__logo">FashionablyLate</h1>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

</body>

</html>