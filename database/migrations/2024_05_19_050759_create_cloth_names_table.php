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
            $table->string('upper_part_dress_name')->nullable();
            $table->string('quantity_of_upper_part_dress')->nullable();
            $table->string('total_upper_part_dress')->nullable();
            $table->string('lower_part_dress_name')->nullable();
            $table->string('quantity_of_lower_part_dress')->nullable();
            $table->string('total_lower_part_dress')->nullable();
            $table->string('total_of_upper_and_lower_part_dress');
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
