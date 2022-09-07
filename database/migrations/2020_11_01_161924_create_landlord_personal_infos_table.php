<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandlordPersonalInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landlord_personal_infos', function (Blueprint $table) {
            $table->id();
            $table->string('l_nid',100);
            $table->string('reg_stat',100);
            $table->string('home_code',100)->nullable();
            $table->string('l_personal_name',100);
            $table->string('l_personal_father_name',100);
            $table->string('l_personal_photo')->nullable();
            $table->string('l_personal_religion',100);
            $table->string('l_personal_dob',100);
            $table->string('l_personal_marital',100);
            $table->string('l_personal_permanent-addss',100);
            $table->string('l_personal_edu_status',100);
            $table->string('l_personal_occupation_detail',100);
            $table->string('l_personal_occu_addss',100);
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
        Schema::dropIfExists('landlord_personal_infos');
    }
}
