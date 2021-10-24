@extends('layouts.user.app')

@section('title','ホーム画面')

@section('content')
<main class="lg:flex">
    <div class="flex-initial lg:w-48 lg:border-4 lg:h-auto lg:visible invisible">
        <div class="lg:mt-32 text-left bg-yellow-500 lg:h-24 text-white ">
            <div class="pt-1 pl-1 text-base">
                現在の走行距離
            </div>
            <div class="pt-3 pr-2.5 text-3xl text-right">
                130km
            </div>
        </div>
    </div>
    <div class="lg:hidden visible w-11/12 border-2 border-yellow-600 h-32 ml-4">
         <div class="pt-1 pl-1 text-base text-yellow-600">
                現在の走行距離
        </div>
        <div class="pt-3 pr-2.5 text-3xl text-right text-yellow-700">
                130km
        </div>
    </div>
    <div class="lg:flex-1 mt-16 mb-28">
        <div class="mt-10 mr-16 lg:ml-16 ml-4 w-11/12 border-4">
            <div class="border-b h-12 lg:w-full table">
                <div class="table-cell align-middle">
                    <span class="text-base relative pl-8">
                        <i class="icon-bell"></i>
                        お知らせ
                    </span>
                </div>
            </div>
                <ul>
                    <li class="table table-fixed w-full text-left  text-xs">
                        <dl class="h-14 table-row bg-white ">
                            <dt class="table-cell align-middle w-24 pl-4 ">勤怠連絡</dt>
                            <dd class="table-cell align-middle w-20">2021-07-20</dd>
                            <dd class="table-cell align-middle w-10 text-red-500">NEW</dd>
                            <dd class="table-cell align-middle overflow-hidden overflow-ellipsis whitespace-nowrap">[安達]家事事情により休暇します。</dd>
                        </dl>
                        <dl class="h-14 table-row bg-gray-200">
                            <dt class="table-cell align-middle w-24 pl-4">勤怠連絡</dt>
                            <dd class="table-cell align-middle w-20">2021-07-19</dd>
                            <dd class="table-cell align-middle w-10 text-red-500">NEW</dd>
                            <dd class="table-cell align-middle overflow-ellipsis whitespace-nowrap">[安達]家事事情により休暇します。</dd>
                        </dl>
                        <dl class="h-14 table-row bg-white">
                            <dt class="table-cell align-middle w-24 pl-4">    勤怠連絡</dt>
                            <dd class="table-cell align-middle w-20">2021-07-18</dd>
                            <dd class="table-cell align-middle w-10 text-red-500">NEW</dd>
                            <dd class="table-cell align-middle overflow-ellipsis whitespace-nowrap">[安達]家事事情により休暇します。</dd>
                        </dl>
                        <dl class="h-14 table-row bg-gray-200">
                            <dt class="table-cell align-middle w-24 pl-4">勤怠連絡</dt>
                            <dd class="table-cell align-middle w-20">2021-07-17</dd>
                            <dd class="table-cell align-middle w-10 text-red-500">NEW</dd>
                            <dd class="table-cell align-middle overflow-ellipsis whitespace-nowrap">[安達]家事事情により休暇します。</dd>
                        </dl>
                    </li>
                </ul>
        </div>
        <!--一般ユーザ向け選択ボタンの表示-->
        <div class="mt-20">
            <div class="lg:flex lg:justify-around block text-center">
                <a href="{{ route('user.report') }}">
                    <div class="h-40 w-64 border-4 text-center table-cell align-text-bottom hover:bg-yellow-100 transition duration-300">
                        <img src="{{ asset('assets/operating-report-img.png')}}" class="h-7 w-7 mt-10 ml-28"/>
                        <div class="text-base mt-3">
                        稼働報告
                        </div>
                    </div>     
                </a>
                <div class="lg:mt-0 mt-16">
                    <a href="">
                        <div class="h-40 w-64 border-4 text-center table-cell align-text-bottom hover:bg-yellow-100 transition duration-300">
                            <img src="{{ asset('assets/shift-table-img.png')}}" class="h-7 w-7 mt-10 ml-28"/>
                            <div class="text-base mt-3">
                            シフト表
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="block text-center mt-16">
                <a href="">
                    <div class="h-40 w-64 border-4 text-center table-cell align-text-bottom hover:bg-yellow-100 transition duration-300">
                        <img src="{{ asset('assets/map-img.png')}}" class="h-7 w-7 mt-10 ml-28"/>
                        <div class="text-base mt-3">
                        マップ
                        </div>
                    </div>
                </a> 
            </div>
        </div>
    </div>
</main>
@endsection