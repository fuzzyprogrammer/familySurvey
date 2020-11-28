<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member_education', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('religious_education');
            $table->string('religious_education_year');
            $table->string('general_education');
            $table->string('general_education_year');
            $table->string('general_institution_place');
            $table->string('religious_institution_place');
            $table->string('other_courses');
            $table->string('life_goals');
            $table->string('life_skills');
            $table->string('services_received');
            $table->string('source');
            $table->string('support_required');
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
        Schema::dropIfExists('member_education');
    }
}
