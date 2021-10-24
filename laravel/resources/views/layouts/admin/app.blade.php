<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Tailwind CSS読み込み -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="lg:border-4">
            <div class="w-auto">
                <!--
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="flex justify-around pt-5 pb-5" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="text-gray-500 lg:text-5xl ml-5 lg:-mt-3.5">
                    Freetment
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="ml-auto text-gray-500 flex text-base pt-2 lg:mr-14 mr-5">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('admin.login'))
                                <li class="pr-10 pl-10">
                                    <a class="hover:underline hover:text-gray-500" href="{{ route('admin.login') }}">ログイン</a>
                                </li>
                            @endif

                            @if (Route::has('admin.register'))
                                <li>
                                    <a class="hover:underline hover:text-gray-500" href="{{ route('admin.register') }}">新規登録</a>
                                </li>
                            @endif
                        @else
                                <div class="flex -mt-3.5 text-base">
                                    <li class="pr-10 pl-10">
                                        <a id="navbarDropdown" class="hover:underline hover:text-gray-500" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
                                    </li>
                                    <li>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="hover:underline hover:text-gray-500" href="{{ route('admin.logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                ログアウト
                                            </a>

                                            <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        
        <!-- フッター -->
        @include('includes.admin.footer')

    </div>
</body>
</html>
