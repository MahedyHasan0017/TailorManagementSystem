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
        Schema::create('pocket_for_pants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pant_measurement_id')->constrained('pant_measurements')->cascadeOnDelete();
            $table->string('pant_pocket_name')->nullable() ; 
            $table->string('cloth_order_id') ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pocket_for_pants');
    }
};
