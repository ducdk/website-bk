<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CategoryKhoaHoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description');
            $table->string('timemodified');
            $table->timestamps();
        });

        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->string('displayname');
            $table->longText('summary');
            $table->string('format');
            $table->string('categoryid');
            $table->integer('startdate');
            $table->integer('enddate');
            $table->integer('visible');
            $table->integer('groupmode');
            $table->integer('timecreated');
            $table->integer('timemodified');
            $table->timestamps();
        });

        Schema::create('courses_courses_category', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger("courses_id")->index();
            $table->foreign('courses_id')->references('id')->on('courses')->onDelete("cascade");

            $table->unsignedInteger("courses_category_id")->index();
            $table->foreign('courses_category_id')->references('id')->on('courses_category')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_category');
        Schema::dropIfExists('courses');
        Schema::dropIfExists('courses_courses_category');
    }
}
