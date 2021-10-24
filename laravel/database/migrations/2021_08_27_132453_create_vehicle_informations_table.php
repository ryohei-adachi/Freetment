<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**  車両情報テーブル  **/

class CreateVehicleInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_informations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('cur_model_id')->unsigned();  //車種ID
            $table->foreign("cur_model_id")  
            ->references('id')
            ->on('car_models')
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
            $table->date('vehicle_register_date');  //登録日
            $table->date('car_inspection_expiration_date'); //車検有効期限ß
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
        Schema::dropIfExists('vehicle_informations');
    }
}
