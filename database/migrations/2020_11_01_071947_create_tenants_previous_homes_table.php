<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsPreviousHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants_previous_homes', function (Blueprint $table) {
            $table->id();
            $table->string('t_nid',100);
            $table->string('t_prelandlord_name',100);
            $table->string('t_prelandload_phone',100);
            $table->string('t_prelandload_flat',100);
            $table->string('t_prelandload_house',100);
            $table->string('t_prelandload_road',100);
            $table->string('t_prelandload_area',100);
            $table->string('t_prelandload_section_bfock',100);
            $table->string('t_prelandload_thana',100);
            $table->string('t_prelandload_postcode',100);
            $table->string('t_prelandload_reason_change_home',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants_previous_homes');
    }
}
