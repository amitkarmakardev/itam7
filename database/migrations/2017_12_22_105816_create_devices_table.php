<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('asset_id')->nullable();
            $table->string('model')->nullable();
            $table->string('subtype')->nullable();
            $table->string('serial_no')->nullable();
            $table->string('machine_name')->nullable();
            $table->string('ip')->nullable();
            $table->string('os')->nullable();
            $table->string('product_key')->nullable();
            $table->string('location')->nullable();
            $table->string('owner')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('type')->nullable();
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
