<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsEmergencyContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenants_emergency_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('t_nid',100);
            $table->string('t_emergency_name',100);
            $table->string('t_emergency_nid',100);
            $table->string('t_emergency_phone',100);
            $table->string('t_emergency_addess',100);
            $table->string('t_emergency_relation',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tenants_emergency_contacts');
    }
}
