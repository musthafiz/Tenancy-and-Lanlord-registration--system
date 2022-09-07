<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsContactInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants_contact_infos', function (Blueprint $table) {
            $table->id();
            $table->string('t_nid',100);
            $table->string('t_passport',100);
            $table->string('t_curr_home_code',100);
            $table->string('t_email',100);
            $table->string('t_phone',100);
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants_contact_infos');
    }
}
