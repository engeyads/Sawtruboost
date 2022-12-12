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

          /* We started adding code here*/

            $table->text('title');  // Title of our blog post
            $table->text('body');   // Body of our blog post
            $table->text('user_id'); // user_id of our blog post author
            $table->text('featured_image')->nullable(); // featured_image of our blog post author
            $table->text('seo_keywords')->nullable(); // seo_keywords of our blog post author
            $table->text('seo_description')->nullable(); // seo_description of our blog post author

          /* We stopped adding code here*/

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
        Schema::dropIfExists('blog_posts');
    }
};
