@extends('layouts.admin.app')

@section('title','ドライバー稼働情報')

@section('content')
<main>
    @if($user)
    <div class="mt-24 mb-32 lg:ml-28 ml-4">
        <div class="relative text-xl mt-12 text-gray-700">
            <h2>{{$user->name}}さんの稼働情報</h2>
            <h2>{{$oprerating_information->operating_date}}</h2>
        </div>
        <table class="lg:w-3/4 text-base mt-20 mb-16 w-11/12">
            <tr class="border-2 text-center h-12">
                <td class="bg-gray-400  text-white border-2">稼働時刻</td>
                <td class="border-2">{{$oprerating_information->opening_time}}</td>
                <td class="bg-gray-400 text-white border-2">終業時刻</td>
                <td class="border-2">{{$oprerating_information->closing_time}}</td>
            </tr>
            <tr class="text-center w-3/4 h-12">
                <td class="bg-gray-400  text-white border-2">出発地デポ</td>
                <td class="border-2" colspan="3">{{$oprerating_information->departure_depot_name}}</td>
            </tr>
            <tr class="text-center w-3/4 h-12">
                <td class="bg-gray-400  text-white border-2">協力会社</td>
                <td class="border-2" colspan="3">{{$oprerating_information->cooperation_company_name}}</td>
            </tr>
            <tr class="border-2 text-center h-12">
                <td class="bg-gray-400  text-white border-2">持ち出し個数</td>
                <td class="border-2">{{$oprerating_information->taking_out_count}}</td>
                <td class="bg-gray-400 text-white border-2">配完個数</td>
                <td class="border-2">{{$oprerating_information->distribute_complete_count}}</td>
            </tr>
            <tr class="text-center w-3/4 h-12">
                <td class="bg-gray-400  text-white border-2">配送場所</td>
                <td class="border-2" colspan="3">{{$oprerating_information->delivery_location}}</td>
            </tr>
            <tr class="text-center w-3/4 h-12">
                <td class="bg-gray-400  text-white border-2">ガソリン量</td>
                <td class="border-2" colspan="3">{{$oprerating_information->gasoline_fare}}</td>
            </tr>
        </table>

        <a href="{{route('admin.driver-operation')}}" class="bg-gray-600 text-white border-transparent leading-4 
                h-auto w-auto pt-2 pb-2 pr-4 pl-4 text-base rounded hover:bg-gray-400" >
                ← 検索画面に戻る
        </a>   

    </div>
    @else
    @endif

</main>
@endsection

