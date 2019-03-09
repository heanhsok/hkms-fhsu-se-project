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
            $table->string('middle_name')->nullable();
            $table->string('last_name');

            $table->smallInteger('isStudent');
            // 1 = student
            // 0 = working professional

            $table->boolean('isVerified')->default(false); // email verify
            $table->boolean('isApproved')->default(false); // approve by admin


            $table->enum('gender',['male','female']);
            $table->string('phone_number')->nullable();

            $table->string('biography')->nullable();
            $table->string('profile_picture')->nullable();

            //address
            $table->string('street_number')->nullable();
            $table->string('street_name')->nullable();
            $table->string('commune')->nullable();
            $table->string('district')->nullable();
            $table->string('city')->nullable();
            $table->string('country')->nullable();

            // has many interest
            // has many careers
            // has many educations

            
            //following tags
            //following other users

            // PK of this table is used in other tables
            //user upvote and downvote post/question
            //user upvote and downvote comments/answers

            
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
