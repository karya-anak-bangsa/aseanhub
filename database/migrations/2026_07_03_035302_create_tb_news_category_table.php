<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_news_category', function (Blueprint $table) {
            $table->id('id_news_category');
            $table->string('category_name');
            $table->string('nama_kategori');
            $table->string('slug_en')->unique();
            $table->string('slug_id')->unique();
            $table->text('description')->nullable();
            $table->text('deskripsi')->nullable();
            $table->unsignedInteger('sort_order')->default(0);

            # ...
            $table->enum('status_data', ['Active', 'Not Active'])->default('Active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_news_category');
    }
};
