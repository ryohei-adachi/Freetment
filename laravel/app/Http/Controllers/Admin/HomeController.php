<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OperatingInformation;
use App\Models\User;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    //管理者用ダッシュボード画面の表示
    public function index()
    {
        return view('admin.home');
    }

    //ドライバー稼働情報の表示
    public function showDriverOperation()
    {
        $results = array();
        return view('admin.search-driver-operation',['result_count' => 0]);
    }

    //ドライバー稼働情報の検索
    public function searchDriverOperation(Request $request)
    {

        //バリデーション結果を実行
        $request->validate([
            'search_name' => 'required',
            'search_date' => 'required',
        ],[
            'search_name.required' => '検索する氏名を入力してください。',
            'search_date.required' => '検索する日付を入力してください。',
        ]);

        //SQL実行結果の初期化
        $results = "";
        $result_count = 0;

        //検索文字を抽出
        $search_name = $request->search_name;
        $search_date = $request->search_date;

        //検索文字がある場合にSQL実行
        if(!(empty($search_name) || empty($search_date))){

            //SQL実行結果のレコード数を取得する
            $result_count =  User::Join('operating_informations','users.id','=','operating_informations.user_id')
                ->where('users.name', 'LIKE', "%{$search_name}%")
                ->where('operating_informations.operating_date',$search_date)
                ->count();

            //レコード数1以上の場合は結果を取得
            if ($result_count > 0){
                $results = User::Join('operating_informations','users.id','=','operating_informations.user_id')
                    ->where('users.name', 'LIKE', "%{$search_name}%")
                    ->where('operating_informations.operating_date',$search_date)
                    ->get();
            }
        }
        return view('admin.search-driver-operation',compact('results','result_count'));
    }

    //該当ユーザの稼働情報の表示
    public function showDriverOperationUser(Request $request)
    {
        $user_id = $request->user_id;
        $operating_date = $request->operating_date;
        
        $user = User::find($user_id);
         
        $oprerating_information = OperatingInformation::where('user_id',$user_id)->where('operating_date',$operating_date)->first();

        return view('admin.show-driver-operation',compact('user','oprerating_information'));
    }
}
