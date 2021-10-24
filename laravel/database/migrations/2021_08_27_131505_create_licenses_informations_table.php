<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**  免許情報テーブル  **/

class CreateLicensesInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('licenses_informations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('acquisition_license_id')->unsigned();  //車種ID
            $table->foreign('acquisition_license_id')
                  ->references('id')
                  ->on('acquisition_licenses_informations')
                  ->cascadeOnDelete()
                  ->cascadeOnUpdate();
            $table->date('license_expire_date');  //車検有効期限
            $table->string('car_body_number');  //車体番号
            $table->string('employer_name');  //使用者名
            $table->string('employer_address');  //使用者住所
            $table->string('owner_name');  //所有者名
            $table->string('owner_address');  //所有者住所
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
        Schema::dropIfExists('licenses_informations');
    }
}
