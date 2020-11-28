<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('family_id');
            $table->string('present_district');
            $table->string('present_taluq');
            $table->string('present_jamath');
            $table->string('present_area');
            $table->string('present_door_no');
            $table->string('present_belongsTo');
            $table->string('present_state');
            $table->string('present_pincode');
            $table->string('prev_district');
            $table->string('prev_taluq');
            $table->string('prev_jamath');
            $table->string('prev_area');
            $table->string('prev_door_no');
            $table->string('prev_belongsTo');
            $table->string('prev_state');
            $table->string('prev_pincode');
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
        Schema::dropIfExists('addresses');
    }
}
