<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>
<body>
    <!-- 教材の解答↓ -->
    <header class="header">
    <div class="header__inner">
        <a class="header__logo" href="/">Todo</a>
    </div>
    </header>

    <!-- 自分の解答↓ -->
    <!-- <header class="header">
        <div class="header-inner">
            <h1 class="header-logo"><a href="/" class="header-link">Todo</a></h1>
        </div>
    </header> -->
    
    <main>
        @yield('content')
    </main>
</body>
</html>