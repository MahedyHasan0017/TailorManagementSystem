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
        Schema::create('single_earning_records', function (Blueprint $table) {
            $table->id();
            $table->string('tailor_name');
            $table->string('tailor_mobile_number');
            $table->string('tailor_wage');
            $table->string('total_price_from_this_order');
            $table->string('income_from_this_order');
            $table->boolean('tailor_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('single_earning_records');
    }
};
