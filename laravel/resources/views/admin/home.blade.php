@extends('layouts.admin.app')

@section('title','管理者画面')

@section('content')
<main class="mb-64">
    <div class="mt-16 w-full mb-32">
        <div class="relative text-xl lg:pl-8 pl-4 mt-12">
            <h2>管理画面</h2>
        </div>
        <div class="block mt-11 mr-6 ml-6">
            <div class="lg:flex lg:justify-around block text-center">
                <div class="mb-10 lg:mb-0 hover:bg-gray-200 transition duration-300">
                    <a href="" class="">
                        <div class="h-36 w-64 border-4 text-center table-cell align-bottom">
                            <img src="{{ asset('assets/search-register-user-img.png')}}" class="w-20 h-10 mt-2 ml-20 mb-5" />
                            <div class="text-base mb-3">
                            登録ユーザ検索
                            </div>
                        </div>     
                    </a>
                </div>
                <div class="mb-10 lg:mb-0 hover:bg-gray-200 transition duration-300">
                    <a href="{{route('admin.driver-operation')}}" class="">
                        <div class="h-36 w-64 border-4 text-center table-cell align-bottom">
                            <img src="{{ asset('assets/driver-operating-information-img.png')}}" class="w-15 h-12 mt-2 ml-28 mb-5" />
                            <div class="text-base mb-3">
                            ドライバー稼働情報
                            </div>
                        </div>     
                    </a>
                </div>
                <div class="mb-10 lg:mb-0 hover:bg-gray-200 transition duration-300">
                    <a href="" class="">
                        <div class="h-36 w-64 border-4 text-center table-cell align-bottom">
                            <img src="{{ asset('assets/company-vehicle-confirmation-img.png')}}" class="w-20 h-10 mt-2 ml-20 mb-5" />
                            <div class="text-base mb-3">
                            自社車両確認
                            </div>
                        </div>     
                    </a>
                </div>
                <div class="mb-10 lg:mb-0 hover:bg-gray-200 transition duration-300">
                    <a href="" class="">
                        <div class="h-36 w-64 border-4 text-center table-cell align-bottom">
                            <img src="{{ asset('assets/calendar-confirmation-img.png')}}" class="w-15 h-10 mt-2 ml-28 mb-5" />
                            <div class="text-base mb-3">
                            カレンダー確認
                            </div>
                        </div>     
                    </a>
                </div>
            </div>
            <div class="lg:flex lg:justify-around mt-12 block text-center">
                <div class="mb-10 lg:mb-0 hover:bg-gray-200 transition duration-300">
                    <a href="" class="">
                        <div class="h-36 w-64 border-4 text-center table-cell align-bottom">
                            <img src="{{ asset('assets/news-management-img.png')}}" class="w-15 h-10 mt-2 ml-28 mb-5" />
                            <div class="text-base mb-3">
                            お知らせ管理
                            </div>
                        </div>     
                    </a>
                </div>
                <div class="mb-10 lg:mb-0 hover:bg-gray-200 transition duration-300">
                    <a href="" class="">
                        <div class="h-36 w-64 border-4 text-center table-cell align-bottom">
                            <img src="{{ asset('assets/maps-confirmation-img.png')}}" class="w-15 h-12 mt-2 ml-24 mb-5" />
                            <div class="text-base mb-3">
                            位置情報確認
                            </div>
                        </div>     
                    </a>
                </div>
                <div class="mb-10 lg:mb-0 hover:bg-gray-200 transition duration-300">
                    <a href="" class="">
                        <div class="h-36 w-64 border-4 text-center table-cell align-bottom">
                            <img src="{{ asset('assets/template-acquisition-img.png')}}" class="w-10 h-10 mt-2 ml-28 mb-5" />
                            <div class="text-base mb-3">
                            テンプレート取得
                            </div>
                        </div>
                    </a>
                </div>
                <div class="mb-10 lg:mb-0 hover:bg-gray-200 transition duration-300">
                    <a href="" class="">
                        <div class="h-36 w-64 border-4 text-center table-cell align-bottom">
                            <img src="{{ asset('assets/document-production-img.png')}}" class="w-10 h-10 mt-2 ml-24 mb-5" />
                            <div class="text-base mb-3">
                            付属書類の制作
                            </div>
                        </div>     
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection