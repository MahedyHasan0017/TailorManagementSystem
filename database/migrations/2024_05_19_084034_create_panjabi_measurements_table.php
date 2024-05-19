<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('panjabi_measurements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cloth_order_id')->constrained('cloth_orders')->cascadeOnDelete();
            $table->string('panjabi_lomba')->nullable();
            $table->string('panjabi_body')->nullable();
            $table->string('panjabi_body_luz')->nullable();
            $table->string('panjabi_pet')->nullable();
            $table->string('panjabi_put')->nullable();
            $table->string('panjabi_hater_lomba')->nullable();
            $table->string('panjabi_hatar_mukh')->nullable();
            $table->string('panjabi_kaff')->nullable();
            $table->string('panjabi_gola')->nullable();
            $table->string('panjabi_plate_fara')->nullable();
            $table->string('panjabi_colar_choura')->nullable();
            $table->string('panjabi_plate_choura')->nullable();
            $table->string('panjabi_gher')->nullable();
            $table->string('panjabi_hiff')->nullable();
            $table->string('panjabi_nich_hata')->nullable();
            $table->string('panjabi_madani_fara')->nullable();
            $table->string('panjabi_mot_mora')->nullable();
            $table->string('panjabi_hatte_pasting')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panjabi_measurements');
    }
};
