<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('device_no')->default('');
            $table->string('type_of_device')->default('');
            $table->integer('device_counter')->default(0);
            $table->string('divice_style')->default('');
            $table->string('divice_category')->default('');
            $table->string('SN')->default('');
            $table->string('oner')->default('');
            $table->string('main_oner')->default('');
            $table->string('maintenancy_doc')->default('');
            $table->string('maintenancy_price')->default(0); 
            $table->timestamp('maintenancy_date');
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
        Schema::dropIfExists('devices');
    }
}
