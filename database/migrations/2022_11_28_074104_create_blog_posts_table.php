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
        Schema::create('blog_posts', function (Blueprint $table) {
            $table->id();
            $table->text('title');  // Title of our blog post
            $table->text('body');   // Body of our blog post
            $table->text('titlear');  // Title of our blog post
            $table->text('bodyar');   // Body of our blog post
            $table->unsignedBigInteger('uid')->nullable(); // user_id of our blog post author
            $table->text('featured_image')->nullable(); // featured_image of our blog post author
            $table->text('seo_keywords')->nullable(); // seo_keywords of our blog post author
            $table->text('seo_description')->nullable(); // seo_description of our blog post author
            $table->text('seo_keywordsar')->nullable(); // seo_keywords of our blog post author
            $table->text('seo_descriptionar')->nullable(); // seo_description of our blog post author
            $table->timestamps();

            $table->foreign('uid')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blog_posts');
    }
};
