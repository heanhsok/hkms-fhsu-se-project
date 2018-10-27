<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpportunityPagePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opportunity_page_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('opportunity_page_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('title');
            $table->string('institution');
            $table->string('category');
            $table->string('picture')->default('default.png');
            $table->text('description');
            $table->text('requirement');
            $table->text('contact');
            $table->string('location');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->boolean('status')->default(TRUE);
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
        Schema::dropIfExists('opportunity_page_posts');
    }
}
