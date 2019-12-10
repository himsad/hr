<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name'); //php html
            $table->integer('user_id'); 
            $table->year('start_date');
            $table->string('skill_level')->nullable()->default('beginner');
            $table->longText('past_work_history')->nullable();
            $table->longText('any_other_information')->nullable();
      
            $table->dateTime('admin_interview')->nullable();
            $table->integer('admin_user_id')->nullable();
            $table->string('score')->nullable(); // 0 - 10
            $table->string('interview_status')->default('not requested'); //
            $table->double('interview_amount_paid', 8, 2)->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('skills');
    }
}
