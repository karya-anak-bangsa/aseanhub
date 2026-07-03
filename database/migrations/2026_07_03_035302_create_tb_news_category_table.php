<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_news_category', function (Blueprint $table) {

            # primary key
            $table->id('id_news_category');

            # english
            $table->string('category_name_en');
            $table->string('slug_en')->unique();
            $table->text('description_en')->nullable();

            # indonesia
            $table->string('category_name_id');
            $table->string('slug_id')->unique();
            $table->text('description_id')->nullable();

            # others
            $table->unsignedInteger('sort_order')->default(0);
            $table->enum('status_data', ['Active', 'Not Active'])->default('Active');

            # others
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_news_category');
    }
};
