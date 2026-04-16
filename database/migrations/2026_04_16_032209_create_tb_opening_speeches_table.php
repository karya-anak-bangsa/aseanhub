<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tb_opening_speeches', function (Blueprint $table) {

            # ...
            $table->id('id_opening_speeches');
            $table->string('name');
            $table->string('position');
            $table->text('message');
            $table->string('photo')->nullable();
            $table->integer('order')->default(0);

            # ...
            $table->enum('status_data', ['Active', 'Not Active'])->default('Active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_opening_speeches');
    }
};
