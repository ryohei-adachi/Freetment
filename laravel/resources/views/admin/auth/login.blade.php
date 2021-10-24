<!-- Tailwind CSS読み込み -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@extends('layouts.admin.app')

@section('title','ログイン画面')

@section('content')
<div class="table lg:w-96 w-80 m-auto mt-10 mb-40">
    <div class="p-9 leading-normal text-gray-700 rounded border-4">
        <div class="col-md-8">
            <div class="card">
                <div class="mb-2 text-2xl text-gray-500 text-center">Freetment</div>
                <div class="mb-12 text-base text-gray-500 text-center">管理者画面</div>
                <div class="relative transition">
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf

                        <div class="">
                            <label for="email" class="mb-5 text-base text-gray-500">ユーザ名</label>

                            <div class="relative mb-0 z-0 mt-2">
                                <input id="name" type="text" class="border-4 w-full left-0 bg-transparent pl-1 @error('email') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="email" autofocus>

                                @error('name')
                                    <div class="text-red-500 text-xs" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="relative transition mt-4">
                            <label for="password" class="mb-5 text-base text-gray-500">パスワード</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="border-4 w-full left-0 bg-transparent pl-1 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <div class="text-red-500 text-xs" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mt-6">
                            <div class="block">
                                <button type="submit" class="bg-gray-800 text-white border-transparent leading-4 h-auto pt-3 pb-3 pr-4 pl-4 rounded w-full hover:bg-gray-400">
                                ログイン
                                </button>
                                <div class="mt-3">
                                    @if (Route::has('password.request'))
                                        <a class="text-xs text-gray-400 hover:underline" href="{{ route('password.request') }}">
                                        パスワードを忘れた方
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
