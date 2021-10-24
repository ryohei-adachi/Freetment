<!-- Tailwind CSS読み込み -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@extends('layouts.admin.app')

@section('title','パスワード再設定画面')

@section('content')
<div class="mt-20 ml-40 mb-56">
    <div class="border pr-40 pt-5 pb-5 pl-8 w-auto max-w-3xl ml-44">
        <div>
            <div>
                <div class="text-xl">パスワードの再設定</div>
                <p class="text-gray-400 text-xs mt-10">パスワード再設定用のURLを送信しますので、送信先メールアドレスを入力してください。</p>
                <div class="card-body">
                    @if (session('status'))
                        <div class="text-red-400 text-xs" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="mt-4">
                            <label for="email" class="text-base text-gray-500">メールアドレス</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="border-2 w-64 left-0 bg-transparent pl-1 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <div class="text-red-400 text-xs mt-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-10">
                            <div>
                                <button type="submit" class="bg-yellow-400 text-white border-transparent leading-4 h-auto pt-3 pb-3 pr-4 pl-4 rounded  hover:bg-yellow-600">
                                送信
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
