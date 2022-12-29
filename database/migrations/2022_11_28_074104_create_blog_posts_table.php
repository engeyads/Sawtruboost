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
            $table->text('titleen')->nullable();  // Title of our blog post
            $table->longText('bodyen')->nullable();   // Body of our blog post
            $table->text('titlear')->nullable();  // Title of our blog post
            $table->longText('bodyar')->nullable();   // Body of our blog post
            $table->text('titletr')->nullable();  // Title of our blog post
            $table->longText('bodytr')->nullable();   // Body of our blog post
            $table->unsignedBigInteger('uid')->nullable(); // user_id of our blog post author
            $table->text('featured_image')->nullable(); // featured_image of our blog post author
            $table->text('seo_keywordsen')->nullable(); // seo_keywords of our blog post author
            $table->text('seo_descriptionen')->nullable(); // seo_description of our blog post author
            $table->text('seo_keywordsar')->nullable(); // seo_keywords of our blog post author
            $table->text('seo_descriptionar')->nullable(); // seo_description of our blog post author
            $table->text('seo_keywordstr')->nullable(); // seo_keywords of our blog post author
            $table->text('seo_descriptiontr')->nullable(); // seo_description of our blog post author
            $table->timestamp('publish_date')->nullable()->useCurrent(); // seo_description of our blog post author
            $table->integer('privacy')->nullable()->default('1'); // seo_description of our blog post author
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
