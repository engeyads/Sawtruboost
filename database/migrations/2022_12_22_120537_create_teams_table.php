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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('tag')->nullable();
            $table->unsignedBigInteger('manager')->nullable();
            $table->string('name')->nullable();
            $table->string('photo')->nullable();
            $table->string('bgphoto')->nullable();
            $table->string('bio')->nullable();
            $table->string('country')->nullable();
            $table->string('worktime')->nullable();
            $table->date('started_at')->nullable();
            $table->date('end_at')->nullable();
            $table->timestamps();

            $table->foreign('manager')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
};
