<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
    <div class="navbar navbar-dark bg-dark shadow-sm p-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="{{ route('competition') }}">ホーム</a>
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    {{ Auth::user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ route('dashboard') }}">ダッシュボード</a></li>
                    <li><a class="dropdown-item" href="{{ route('hold') }}">大会開催</a></li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">ログアウト</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-done">@csrf</form>
                    </li>
                </ul>
            </div>
            <a class="navbar-brand d-flex align-items-center" href="{{ route('players') }}">プレイヤー一覧</a>
            <a class="navbar-brand d-flex align-items-center" href="{{ route('contact') }}">お問い合わせ</a>
        </div>
    </div>
</header>
<div>
    @yield('header')
    {{-- {{ request()->path() }} --}}
    {{-- @if ( request()->is('competition' ))
        @yield('content')
    @endif --}}
</div>
</body>
</html>