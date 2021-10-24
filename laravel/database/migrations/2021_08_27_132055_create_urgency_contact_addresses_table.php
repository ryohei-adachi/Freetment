<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**  緊急連絡先テーブル  **/

class CreateUrgencyContactAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urgency_contact_addresses', function (Blueprint $table) {
            $table->id();
            $table->string('urgency_contact_address_name');  //緊急連絡先情報
            $table->string('urgency_contact_zipcode');  //緊急連絡先の郵便番号
            $table->string('urgency_contact_name');  //緊急連絡先の名前
            $table->string('urgency_contact_phone_number');  //緊急連絡先電話番号
            $table->string('urgency_contact_relationship'); //続柄
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
        Schema::dropIfExists('urgency_contact_addresses');
    }
}
