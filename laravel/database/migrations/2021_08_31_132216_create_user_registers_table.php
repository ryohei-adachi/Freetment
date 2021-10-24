<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**  ユーザ登録テーブル  **/

class CreateUserRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_registers', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');     //氏名
            $table->date('birthdate');       //生年月日
            $table->string('phone_number');  //電話番号
            $table->string('address');       //住所
            $table->string('zipcode');       //郵便番号
            $table->string('partner_name');  //配偶者名　
            $table->bigInteger('urgency_contact_address_id')->unsigned();  //緊急連絡先ID
            $table->foreign('urgency_contact_address_id')
                  ->references('id')
                  ->on('urgency_contact_addresses')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->string('delivery_history');  //配送実績
            $table->bigInteger('vehicle_information_id')->unsigned();  //車両情報ID
            $table->foreign('vehicle_information_id')  
                  ->references('id')
                  ->on('vehicle_informations')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->boolean('contract_flag');  //契約フラグ
            $table->string('impression');  //印象
            $table->bigInteger('users_id')->unsigned();  //登録者ID
            $table->foreign('users_id')  
                 ->references('id')
                 ->on('users')
                 ->cascadeOnDelete()
                 ->cascadeOnUpdate();
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
        Schema::dropIfExists('user_registers');
    }
}
