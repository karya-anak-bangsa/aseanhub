<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_reward', function (Blueprint $table) {

            # primary key
            $table->id('id_reward');

            $table->string('title');                        // 1st Winner
            $table->decimal('amount', 12, 2);               // 10000.00
            $table->string('currency')->nullable();         // USD or IDR
            $table->string('information')->nullable();
            $table->integer('order')->default(0);

            # template nama kolom
            $table->string('status_data')->default('Active')->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_reward');
    }
};
