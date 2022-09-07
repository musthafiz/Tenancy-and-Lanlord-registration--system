<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsDriverInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants_driver_infos', function (Blueprint $table) {
            $table->id();
            $table->string('t_nid',100);
            $table->string('t_driver_name',100)->nullable();
            $table->string('t_driver_nid',100)->nullable();
            $table->string('t_driver_phone',100)->nullable();
            $table->string('t_driver_address',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants_driver_infos');
    }
}
