<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandlordFamilyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landlord_family_infos', function (Blueprint $table) {
            $table->id();
            $table->string('l_personal_family_member',100);
            $table->string('l_nid',100);
            $table->string('fname',100)->nullable();
            $table->string('fphn0',100)->nullable();
            $table->string('foccu0',100)->nullable();
            $table->string('fage0',100)->nullable();
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
        Schema::dropIfExists('landlord_family_infos');
    }
}
