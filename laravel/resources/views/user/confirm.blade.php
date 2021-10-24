@extends('layouts.user.app')

@section('title', '入力内容の確認')

@section('content')
<main>
    <div class="lg:ml-16 mb-20 ml-4">
        <div class="mt-10">
            <h1 class="text-gray-800 text-2xl">入力内容の確認</h1>
        </div>
        <div class="mt-10">
            <form method="POST" action="{{route('user.report')}}">
            @csrf
                <div class="text-gray-600 text-base">
                    <h2>以下の入力でよろしいですか？</h2>
                </div>
                <div class="block mt-5">
                    <label class="block text-gray-400 pb-1">始業時間</label>
                    <div class="text-gray-800">
                        {{$inputs['opening_time']}}
                    </div>
                    <input name="opening_time" value="{{$inputs['opening_time']}}" type="hidden">
                </div>
                <div class="block mt-5">
                    <label class="block text-gray-400 pb-1">終業時間</label>
                    <div class="text-gray-800">
                        {{$inputs['closing_time']}}
                    </div>
                    <input name="closing_time" value="{{$inputs['closing_time']}}" type="hidden">
                </div>
                <div class="block mt-5">
                    <label class="block text-gray-400 pb-1">出発地デポ</label>
                    <div class="text-gray-800">
                        {{$inputs['departure_depot_name']}}
                    </div>
                    <input name="departure_depot_name" value="{{$inputs['departure_depot_name']}}" type="hidden">
                </div>
                <div class="block mt-5">
                    <label class="block text-gray-400 pb-1">協力会社名</label>
                    <div class="text-gray-800">
                        {{$inputs['cooperation_company_name']}}
                    </div>
                    <input name="cooperation_company_name" value="{{$inputs['cooperation_company_name']}}" type="hidden">
                </div>
                <div class="block mt-5">
                    <label class="block text-gray-400 pb-1">持ち出し個数</label>
                    <div class="text-gray-800">
                        {{$inputs['taking_out_count']}}
                    </div>
                    <input name="taking_out_count" value="{{$inputs['taking_out_count']}}" type="hidden">
                </div>
                <div class="block mt-5">
                    <label class="block text-gray-400 pb-1">配完個数</label>
                    <div class="text-gray-800">
                        {{$inputs['distribute_complete_count']}}
                    </div>
                    <input name="distribute_complete_count" value="{{$inputs['distribute_complete_count']}}" type="hidden">
                </div>
                <div class="block mt-5">
                    <label class="block text-gray-400 pb-1">配送場所</label>
                    <div class="text-gray-800">
                        {{$inputs['delivery_location']}}
                    </div>
                    <input name="delivery_location" value="{{$inputs['delivery_location']}}" type="hidden">
                </div>
                <div class="block mt-5">
                    <label class="block text-gray-400 pb-1">ガソリン量</label>
                    <div class="text-gray-800">
                        {{$inputs['gasoline_fare']}}
                    </div>
                    <input name="gasoline_fare" value="{{$inputs['gasoline_fare']}}" type="hidden">
                </div>
                <div class="flex mt-9">
                    <div class="rounded w-32 text-white text-base text-center pt-2 
                    pb-2 cursor-pointer hover:bg-yellow-300 bg-yellow-500">
                        <button type="submit" name="action" value="submit">
                        登録する
                        </button>
                    </div>
                    <div class="bg-yellow-600 rounded w-32 text-white text-base text-center pt-2 
                    pb-2 cursor-pointer hover:bg-yellow-300 ml-6">
                        <button type="submit" name="action" value="back">
                        入力内容修正
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection