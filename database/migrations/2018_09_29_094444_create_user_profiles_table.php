<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id')->unsigned();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');

            $table->enum('gender',['male','female']);
            $table->string('phone_number');

            $table->string('biography');
            $table->string('profile_picture');

            //address
            $table->string('street_number')->nullable();
            $table->string('street_name')->nullable();
            $table->string('commune')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();

            //student or working professional?

            //interest
            //education
            //carreer, working experience - specialty, position, company, start date, end date
            //community service/volunteer experiences
            //isVerified
            //following tags
            //following other users
            //user upvote and downvote questions
            //user upvote and downvote comments

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
