<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('family_id');
            $table->string('name');
            $table->string('relationship');
            $table->string('dob');
            $table->string('marital_status');
            $table->string('contact_no');
            $table->string('aadhard_card');
            $table->string('voter_card');
            $table->string('health_card');
            $table->string('image');
            $table->smallInteger('gender');
            $table->string('birth_place');
            $table->string('nationality');
            $table->string('adhar_card_no');
            $table->string('ration_card_no');
            $table->string('voter_id_no');
            $table->string('health_card_no');
            $table->string('email');
            $table->smallInteger('bank_account');
            $table->smallInteger('is_head');
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
        Schema::dropIfExists('members');
    }
}
