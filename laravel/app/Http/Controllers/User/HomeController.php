<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OperatingInformation;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

//参考URL: https://biz.addisteria.com/laravel_carbon/
//composer require nesbot/carbonでライブラリをインストールすること
use Carbon\Carbon;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:user');
    }

    //一般ユーザのダッシュボード表示
    public function index()
    {
        return view('user.home');
    }

    //稼働報告情報画面の表示
    public function showReport()
    {
        return view('user.report');
    }

    //稼働報告情報の確認画面に遷移する処理
    public function confirm(Request $request)
    {
        //バリデーション結果を実行
        $request->validate([
            'opening_time' => 'required',
            'closing_time' => 'required',
            'departure_depot_name' => 'required',
            'cooperation_company_name' => 'required',
            'taking_out_count' => 'required',
            'distribute_complete_count' => 'required',
            'delivery_location' => 'required',
        ],[
            'opening_time.required' => '始業時間を入力してください。',
            'closing_time.required' => '終業時間を入力してください。',
            'departure_depot_name.required' => '出発地デポを入力してください',
            'cooperation_company_name.required' => '協力会社名を入力してください',
            'taking_out_count.required' => '持ち出し個数を入力してください',
            'distribute_complete_count.required' => '配完個数を入力してください',
            'delivery_location.required' => '配送場所を入力してください'
        ]);

        //フォームで受け取ったすべてのinputの値を取得
        $inputs = $request->all();

        //入力内容確認ページのviewに変数を渡し表示
        return view('user.confirm',[
            'inputs' => $inputs,
        ]);
    }

    //稼働報告情報をDB設定する処理
    public function postReport(Request $request)
    {

        //フォームから受け取ったactionの値を取得
        $action = $request->input('action');

        //フォームから受け取ったaction以外のinputの値を取得
        $inputs = $request->except('action');

        if($action !== 'submit'){
            return redirect(route('user.report'))->withInput($inputs);

        }else {

            $input_operation_information = new OperatingInformation;

            //フォーム入力した日付の取得
            $today=Carbon::today();

            $input_operation_information->user_id = Auth::id(); //ユーザIDの取得
            $input_operation_information->operating_date =  $today;
            $input_operation_information->opening_time = $request->opening_time;  //始業時間の取得
            $input_operation_information->closing_time = $request->closing_time;  //終業時間の取得
            $input_operation_information->departure_depot_name = $request->departure_depot_name; //出発地デポの取得
            $input_operation_information->cooperation_company_name = $request->cooperation_company_name; //協力会社名の取得
            $input_operation_information->taking_out_count = $request->taking_out_count;  //持ち出し個数の取得
            $input_operation_information->distribute_complete_count = $request->distribute_complete_count;  //配完個数の取得
            $input_operation_information->delivery_location = $request->delivery_location;  //配完場所の取得

            //ガソリン量の取得（未入力の場合は0)
            if(!empty($request->gasoline_fare)){
                $input_operation_information->gasoline_fare = $request->gasoline_fare;
            }
            else{
                $input_operation_information->gasoline_fare = 0;
            }
            
            //DBに格納
            $input_operation_information->save();

            return redirect()->route('user.report')->with('flash_message', '登録が完了しました');;
        }
    }
}
