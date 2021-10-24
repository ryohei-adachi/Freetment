<!-- Tailwind CSS読み込み -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@extends('layouts.admin.app')

@section('title','新規登録画面')

@section('content')
<div class="mt-10 lg:ml-64 mb-28">
    <div class="border-4 lg:pr-40 pt-5 pb-5 lg:pl-8 pl-4 lg:w-auto lg:max-w-2xl lg:ml-32 w-11/12 ml-4">
        <div>
            <div>
                <div class="text-xl">新規登録</div>

                <div class="mt-10">
                    <form method="POST" action="{{ route('admin.register') }}">
                        @csrf

                        <div class="form-group rowx ">
                            <label for="name" class="text-base text-gray-500 ">ユーザ名</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="border-2 w-64 left-0 bg-transparent pl-1 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <div class="text-xs text-red-400" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-8">
                            <label for="email" class="text-base text-gray-500">メールアドレス</label>

                            <div>
                                <input id="email" type="email" class="border-2 w-64 left-0 bg-transparent pl-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <div class="text-xs text-red-400" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-8">
                            <label for="password" class="text-base text-gray-500">パスワード</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="border-2 w-64 left-0 bg-transparent pl-1　@error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <div class="text-xs text-red-400" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-8">
                            <label for="password-confirm" class="text-base text-gray-500">パスワード再入力</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="border-2 w-64 left-0 bg-transparent pl-1" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mt-12">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="bg-black text-white border-transparent leading-4 h-auto pt-3 pb-3 pr-4 pl-4 rounded text-base hover:bg-gray-400">
                                新規登録する
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
