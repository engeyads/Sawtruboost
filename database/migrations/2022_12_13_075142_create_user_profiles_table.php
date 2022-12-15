<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid')->nullable();
            $table->unsignedBigInteger('lid')->nullable();
            $table->string('tag')->nullable();
            $table->string('title')->nullable();
            $table->string('fname')->nullable();
            $table->string('mname')->nullable();
            $table->string('lname')->nullable();
            $table->string('gender')->nullable();
            $table->date('birthday')->nullable();
            $table->string('photo')->nullable();
            $table->string('bgphoto')->nullable();
            $table->string('bio')->nullable();
            $table->string('marital')->nullable();
            $table->string('country')->nullable();
            $table->string('mobile')->nullable();
            $table->string('iban')->nullable();
            $table->string('career')->nullable();
            $table->string('cv')->nullable();
            $table->double('salary')->nullable();
            $table->string('worktime')->nullable();
            $table->date('started_at')->nullable();
            $table->date('end_at')->nullable();
            $table->string('passport')->nullable();
            $table->string('work_permit')->nullable();
            $table->string('visa')->nullable();
            $table->timestamps();

            $table->foreign('uid')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('lid')->references('id')->on('leads')->onDelete('cascade')->onUpdate('cascade');
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
};
