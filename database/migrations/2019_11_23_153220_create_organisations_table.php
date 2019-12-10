<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrganisationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('organisations', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('name');
            $table->longText('description');
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country_id')->nullable();
            $table->longText('contact_details')->nullable();


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
        Schema::dropIfExists('organisations');
    }
}
