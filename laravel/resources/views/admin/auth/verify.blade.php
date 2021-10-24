<!-- Tailwind CSS読み込み -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="ml-24">
        <div class="col-md-8">
            <div class="mb-48">
                <div class="text-xl mt-16">メールアドレス認証</div>

                <div class="mt-16">
                    @if (session('resent'))
                        <div class="text-base text-red-600" role="alert">
                        認証メールを再送しました。
                        </div>
                    @endif
                </div>
                    <div class="text-base text-gray-500 mt-9">
                        <p>認証メールを送信しました。届いたメールをご確認の上、記載のリンクから登録を完了させてください。</p>
                        <p>※メールが届かない場合は、入力したアドレスに間違いがあるか、あるいは迷惑メールフォルダに入っている可能性がありますのでご確認ください。</p>
                    </div>
                    <div class=" text-gray-600 mt-5">
                        <p>認証メールを再送する場合はこちらを下記リンクをクリックしてください。</p>
                    </div>
                    <form class="d-inline" method="POST" action="{{ route('admin.verification.resend') }}">
                        @csrf
                        <button type="submit" class="mt-8 bg-gray-800 text-white border-transparent leading-4 h-auto pt-3 pb-3 pr-4 pl-4 rounded text-base hover:bg-gray-400">メールを再送</button>
                    </form>
            </div>
        </div>
    </div>
</div>
@endsection
