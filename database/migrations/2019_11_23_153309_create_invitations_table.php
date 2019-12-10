<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvitationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id'); //sender id
            $table->string('sender_contact')->nullable();
            $table->integer('receiver_user_id')->nullable();
            $table->integer('organisation_id')->nullable();
            $table->integer('job_id')->nullable();
            $table->string('interview_status')->nullable()->default('yet to be  interviewed');
            $table->dateTime('date_of_interview')->nullable();
            $table->longText('invitation_note')->nullable();
            $table->longText('employer_interview_note')->nullable();
            $table->longText('jobseeker_post_interview_review')->nullable();
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
        Schema::dropIfExists('invitations');
    }
}
