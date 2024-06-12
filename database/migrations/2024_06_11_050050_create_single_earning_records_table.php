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
            $table->string('cloth_upper_name')->nullable();
            $table->string('cloth_lower_name')->nullable();
            $table->string('total_cloth_price');
            $table->string('total_bill');
            $table->string('tailor_wage');
            $table->string('tailor_name');
            $table->string('tailor_mobile_number');
            $table->string('deposite_amount');
            $table->string('rest_amount');
            $table->string('orderer_tarikh');
            $table->string('delivery_tarikh');
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
