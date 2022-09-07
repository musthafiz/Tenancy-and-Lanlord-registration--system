<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsPersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants_personal_infos', function (Blueprint $table) {
            $table->id();
            $table->string('t_nid',100);
            $table->string('reg_stat',100);
            $table->string('t_name',100);
            $table->string('t_father_name',100);	
            $table->string('t_photo');
            $table->string('t_religion',100);
            $table->date('t_dob');
            $table->string('t_marital',100);
            $table->string('t_prmt_address',100);
            $table->string('t_edu_stat',100);
            $table->string('t_occu_detail',100);
            $table->string('t_family_type',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants_personal_infos');
    }
}
