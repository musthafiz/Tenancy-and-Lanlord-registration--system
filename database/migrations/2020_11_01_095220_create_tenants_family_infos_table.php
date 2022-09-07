<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsFamilyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants_family_infos', function (Blueprint $table) {
            $table->id();
            $table->string('t_famaly_number',100);
            $table->string('t_nid',100);
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
        Schema::dropIfExists('tenants_family_infos');
    }
}
