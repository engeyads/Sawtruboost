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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('uid')->nullable();
            $table->unsignedBigInteger('lid')->nullable();
            $table->unsignedBigInteger('pid')->nullable();
            $table->string('content');
            $table->integer('isRead')->default(0);
            $table->integer('available')->default(1);
            $table->dateTime('removed_at')->nullable();
            $table->bigInteger('removed_by')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('uid')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('lid')->references('id')->on('blog_posts')->onDelete('set null')->onUpdate('set null');
            $table->foreign('pid')->references('id')->on('leads')->onDelete('set null')->onUpdate('set null');
            $table->foreign('removed_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
};
