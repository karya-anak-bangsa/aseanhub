<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_news', function (Blueprint $table) {

            # primary key dan foreign key
            $table->id('id_news');
            $table->foreignId('id_news_category')
                ->constrained('tb_news_category', 'id_news_category')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            # english
            $table->string('title_en');
            $table->string('slug_en')->unique();
            $table->text('excerpt_en')->nullable();
            $table->longText('content_en');
            $table->string('thumbnail_en')->nullable();

            # indonesia
            $table->string('title_id');
            $table->string('slug_id')->unique();
            $table->text('excerpt_id')->nullable();
            $table->longText('content_id');
            $table->string('thumbnail_id')->nullable();

            # SEO EN
            $table->string('meta_title_en')->nullable();
            $table->text('meta_description_en')->nullable();
            $table->text('meta_keywords_en')->nullable();

            # SEO ID
            $table->string('meta_title_id')->nullable();
            $table->text('meta_description_id')->nullable();
            $table->text('meta_keywords_id')->nullable();

            # publish
            $table->string('author_name')->nullable();
            $table->dateTime('published_date')->nullable();
            $table->enum('published_status', ['Archived', 'Draft', 'Published'])->default('Draft');
            $table->unsignedBigInteger('views')->default(0);

            # others
            $table->enum('status_data', ['Active', 'Not Active',])->default('Active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_news');
    }
};
