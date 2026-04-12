<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_timeline', function (Blueprint $table) {
            $table->id('id_timeline');

            # attr timeline
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamp('date_start');
            $table->timestamp('date_end');
            $table->string('phase_key')->nullable();

            # soft delete
            $table->enum('status_data', ['Active', 'Not Active'])->default('Active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_timeline');
    }
};
