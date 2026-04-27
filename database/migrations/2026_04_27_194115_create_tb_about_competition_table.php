<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_about_competition', function (Blueprint $table) {
            $table->id('id_about_competition');

            $table->string('tag')->nullable();
            $table->string('title');
            $table->text('description')->nullable();
            $table->date('event_date')->nullable();

            $table->string('title_tor');
            $table->text('description_tor')->nullable();
            $table->string('file_path')->nullable();

            $table->enum('status_data', ['Active', 'Not Active'])->default('Active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_about_competition');
    }
};
