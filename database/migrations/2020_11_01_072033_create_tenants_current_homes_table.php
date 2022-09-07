<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsCurrentHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants_current_homes', function (Blueprint $table) {
            $table->id();
            $table->string('t_nid',100);
            $table->string('t_curr_home_landlord_name',100);
            $table->string('t_curr_home_phone',100);
            $table->string('t_curr_home__flat',100);
            $table->string('t_curr_home_house',100);
            $table->string('t_curr_home__road',100);
            $table->string('t_curr_home_area',100);
            $table->string('t_curr_home_section_bfock',100);
            $table->string('t_curr_home_thana',100);
            $table->string('t_currhome_postcode',100);
            $table->date('t_currhome_shift_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants_current_homes');
    }
}
