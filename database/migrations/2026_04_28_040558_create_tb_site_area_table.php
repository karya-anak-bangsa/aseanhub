<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_site_area', function (Blueprint $table) {

            # ...
            $table->id('id_site_area');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('file_path')->nullable();
            $table->integer('sort_order')->default(0);

            # ...
            $table->enum('status_data', ['Active', 'Not Active'])->default('Active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_site_area');
    }
};
