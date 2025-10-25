<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    @yield('css')
</head>
<body>
    <header class="mainheader">
      <div class="header__inner">
        <h1 class="Fashion">FashionablyLate</h1>
        <a class="link" href="/login">login</a>
      </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>