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
        Schema::create('pant_measurements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cloth_order_id')->constrained('cloth_orders')->cascadeOnDelete();
            $table->string('pant_lomba')->nullable() ;
            $table->string('pant_payer_mukh')->nullable() ;
            $table->string('pant_body_high')->nullable() ;
            $table->string('pant_thai_luz')->nullable() ;
            $table->string('pant_komor')->nullable() ;
            $table->string('pant_belt_type')->nullable() ;
            $table->string('pant_hiff')->nullable() ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pant_measurements');
    }
};
