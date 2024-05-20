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
        Schema::create('cloth_names', function (Blueprint $table) {
            $table->id();
            $table->string('cloth_name') ;
            $table->string('number_of_cloth')->default(1) ;
            $table->string('unit_of_cloth')->nullable() ;
            $table->string('total_of_cloth')->nullable() ;
            $table->foreignId('cloth_order_id')->constrained('cloth_orders')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cloth_names');
    }
};
