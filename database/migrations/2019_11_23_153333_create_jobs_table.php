<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
      
            $table->integer('title');
            $table->string('skills_required');
            $table->longText('description'); 
            $table->string('work_type')->default('on site'); //remote both
            $table->string('job_type')->default('full time'); //part time, contract
            $table->string('status')->nullable()->default('open'); //closed

            $table->integer('organisation_id')->nullable();
            $table->integer('country_id')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
