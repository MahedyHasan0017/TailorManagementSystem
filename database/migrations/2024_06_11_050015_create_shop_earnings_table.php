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
        Schema::create('shop_earnings', function (Blueprint $table) {
            $table->id();
            $table->string('total_balance')->default(0);
            $table->string('total_wages_balance')->default(0);
            $table->string('total_rest_balance')->default(0);
            $table->string('total_revenue')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shop_earnings');
    }
};
