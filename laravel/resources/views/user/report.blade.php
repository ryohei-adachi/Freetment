@extends('layouts.user.app')

@section('title','ホーム画面')

@section('content')
<main>
    <div class="lg:ml-24 mt-10 ml-4 mb-10">
        <div class="text-xl">
            <h2>稼働報告</h2>
        </div>
        @if (session('flash_message'))
            <div class="w-11/12 bg-green-100 text-green-700　pr-5 pl-5 mt-3">
                <div class="align-middle">
                {{ session('flash_message') }}
                </div>
        </div>
        @endif
        <div class="text-base mt-6">
            <form method="POST" action="{{route('user.confirm')}} ">
                @csrf
                <div class="block">
                      
                        @if($errors->has('opening_time'))
                            <p class="text-xs text-red-600">{{$errors->first('opening_time')}}</p>
                        @endif
                        <div class="flex">
                            <label class="block text-gray-1800">始業時間</label>
                            <div class="text-red-500 text-xs mt-1 ml-1">必須</div>
                        </div>
                        <input name="opening_time" value="{{old('opening_time')}}" type="time" class="border-2 mb-7 mt-1 w-24">
                      
                        @if($errors->has('closing_time'))
                                <p class="text-xs text-red-600">{{$errors->first('closing_time')}}</p>
                        @endif
                        <div class="flex">
                            <label>終業時間</label>
                            <div class="text-red-500 text-xs mt-1 ml-1">必須</div>
                        </div>
                        <input name="closing_time" value="{{old('closing_time')}}" type="time" class="border-2 mb-7 mt-1 w-24">
                        
                        @if($errors->has('departure_depot_name'))
                                <p class="text-xs text-red-600">{{$errors->first('departure_depot_name')}}</p>
                        @endif
                        <div class="flex">
                            <label>出発地デポ</label>
                            <div class="text-red-500 text-xs mt-1 ml-1">必須</div>
                        </div>
                        <input name="departure_depot_name" value="{{old('departure_depot_name')}}" type="text" class="border-2 mb-7 mt-1 w-64">
                        
                        @if($errors->has('cooperation_company_name'))
                                <p class="text-xs text-red-600">{{$errors->first('cooperation_company_name')}}</p>
                        @endif   
                        <div class="flex">
                            <label>協力会社名</label>
                            <div class="text-red-500 text-xs mt-1 ml-1">必須</div>
                        </div>
                        <input name="cooperation_company_name" value="{{old('cooperation_company_name')}}" type="text" class="border-2 mb-7 mt-1 w-64">
                        
                        @if($errors->has('taking_out_count'))
                                <p class="text-xs text-red-600">{{$errors->first('taking_out_count')}}</p>
                        @endif
                        <div class="flex">
                            <label>持ち出し個数</label>
                            <div class="text-red-500 text-xs mt-1 ml-1">必須</div>
                        </div>
                        <input name="taking_out_count" min=0 value=0 type="number" class="border-2 mb-7 mt-1 w-64">
                        
                        @if($errors->has('distribute_complete_count'))
                                <p class="text-xs text-red-600">{{$errors->first('distribute_complete_count')}}</p>
                        @endif 
                        <div class="flex">
                            <label>配完個数</label>
                            <div class="text-red-500 text-xs mt-1 ml-1">必須</div>
                        </div>
                        <input name="distribute_complete_count" min=0 value=0 type="number" class="border-2 mb-7 mt-1 w-64">
                        
                        @if($errors->has('delivery_location'))
                                <p class="text-xs text-red-600">{{$errors->first('delivery_location')}}</p>
                        @endif 
                        <div class="flex">
                            <label>配送場所</label>
                            <div class="text-red-500 text-xs mt-1 ml-1">必須</div>
                        </div>
                        <input name="delivery_location" value="{{old('delivery_location')}}" type="text" class="border-2 mb-7 mt-1 w-64">
                        <div class="flex">
                            <label>ガソリン量</label>
                        </div>
                        <input name="gasoline_fare" value=0 type="number" class="border-2 mb-7 mt-1 w-20">
                        <span class="mt-1 ml-1 text-gray-600 text-xs">L</span>
                </div>
                <div class="submit-confirm-button">
                        <button type="submit" class="bg-yellow-400 text-white border-transparent leading-4 h-auto pt-3 pb-3 pr-4 pl-4 mt-3 rounded  hover:bg-yellow-600">
                            入力内容を確認する
                        </button>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection