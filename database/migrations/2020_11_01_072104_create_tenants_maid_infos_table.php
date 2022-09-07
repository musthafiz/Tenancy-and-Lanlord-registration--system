<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsMaidInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants_maid_infos', function (Blueprint $table) {

            $table->id();
            $table->string('t_nid',100);
            $table->string('t_maid_name',100)->nullable();
            $table->string('t_maid_nid',100)->nullable();
            $table->string('t_maid_phone',100)->nullable();
            $table->string('t_maid_addres',100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants_maid_infos');
    }
}
