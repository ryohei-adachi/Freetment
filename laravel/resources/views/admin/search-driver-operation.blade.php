@extends('layouts.admin.app')

@section('title','ドライバー稼働情報')

@section('content')
<main class="mb-64">
    <div class="mt-24  mb-32 lg:ml-28 ml-4">
        <div class="relative text-xl mt-12 text-gray-700">
            <h2>ドライバー稼働情報</h2>
        </div>
        <form method="POST" action="{{route('admin.driver-operation')}}">
        @csrf
            <div class="border-4 h-80 lg:w-9/12 w-11/12 mt-12">
                <div class="text-gray-500 mt-8 ml-4">
                    <h1 class="text-xl mb-8">検索条件</h1>
                        @if($errors->has('search_name'))
                            <p class="text-xs text-red-600 mb-3">{{$errors->first('search_name')}}</p>
                        @endif
                    <div class="text-gray-500 flex mb-8">
                        <label>氏名</label>
                        <input name="search_name" type="text" value="{{old('search_name')}}" class="border-2 ml-3 w-48">
                    </div>
                        @if($errors->has('search_date'))
                            <p class="text-xs text-red-600 mb-3">{{$errors->first('search_date')}}</p>
                        @endif
                    <div class="flex text-gray-500">
                        <label>日付</label>
                        <input name="search_date" type="date" value="{{old('search_date')}}" class="border-2 ml-3 w-48">
                    </div>
                </div>
                <button type="submit" class="bg-black text-white border-transparent leading-4 
                h-auto w-auto pt-2 pb-2 pr-4 pl-4 mt-8 ml-6 text-base rounded hover:bg-gray-400" >
                検索する
                </button>   
            </div>
        </form>
    
    @if($result_count > 0 )
    <form method="POST" action="{{route('admin.driver-operation-user')}}">
        @csrf
        <div class="mt-20">
            <hr class="lg:w-3/4 block mb-20 w-11/12">
            <table class="border-2 lg:w-3/4 w-11/12 text-base">
                <tr class="bg-gray-50 border-2 text-center text-gray-500">
                    <td class="border-2">ユーザID</td>
                    <td class="border-2">名前</td>
                    <td class="border-2">日付</td>
                </tr>
            @foreach ($results as $result)
                <tr class="ml-6 text-center">
                    <td class="border-2">
                        <button type="submit" class="hover:text-blue-500 bg-gray-50 cursor-pointer" name="user_id" value="{{$result->user_id}}">   
                        
                        {{$result->user_id}}
                        </button>
                    </td>
                    <td class="border-2">
                        <button type="submit" class="hover:text-blue-500 bg-gray-50 cursor-pointer" name="user_id" value="{{$result->user_id}}">
                        {{$result->name}}
                        </button>
                    </td>
                    <td class="border-2">       
                        <input type="hidden" name="operating_date" value="{{$result->operating_date}}" > 
                        {{$result->operating_date}}
                    </td>
                </tr>
            @endforeach
            </table>
        </form>
    @endif    
    </div>
</main>
@endsection