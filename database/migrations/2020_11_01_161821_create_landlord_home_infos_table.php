<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandlordHomeInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landlord_home_infos', function (Blueprint $table) {
            $table->id();
            $table->string('l_nid',100);
            $table->string('l_home_info_flat',100);
            $table->string('l_home_info_house',100);
            $table->string('l_home_info_road',100);
            $table->string('l_home_info_area',100);
            $table->string('l_home_info_section_bfock',100);
            $table->string('l_home_info_thana',100);
            $table->string('l_home_info_post_code',100);
            $table->string('l_home_info_bill_photo')->nullable();
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
        Schema::dropIfExists('landlord_home_infos');
    }
}
