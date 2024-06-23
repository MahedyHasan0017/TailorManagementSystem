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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('vendor_info');
            $table->string('cotton_name');
            $table->string('cotton_type');
            $table->string('cotton_description')->nullable();
            $table->double('cotton_price');
            $table->string('cotton_stock_management_unit')->nullable();
            $table->string('cotton_size');
            $table->string('cotton_yards')->nullable();
            $table->string('cotton_joint')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
