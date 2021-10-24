<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**  取得免許情報テーブル  **/

class CreateAcquisitionLicensesInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acquisition_licenses_informations', function (Blueprint $table) {
            $table->id();
            $table->string("acquisition_license_name");  //取得免許名
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
        Schema::dropIfExists('acquisition_licenses_informations');
    }
}
