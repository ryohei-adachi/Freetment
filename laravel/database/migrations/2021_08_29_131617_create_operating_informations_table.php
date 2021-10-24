<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**  稼働情報テーブル  **/

class CreateOperatingInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('operating_informations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();  //ユーザID
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->date('operating_date');  //稼働日時
            $table->time('opening_time');  //始業時間
            $table->time('closing_time');  //終業時間
            $table->string('departure_depot_name');  //出発地デポ
            $table->string('cooperation_company_name');  //協力会社名
            $table->integer('taking_out_count'); //持ち出し個数
            $table->integer('distribute_complete_count'); //配完個数
            $table->string('delivery_location'); //配完場所
            $table->double('gasoline_fare',8,2); //ガソリン量
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('operating_informations');
    }
}
