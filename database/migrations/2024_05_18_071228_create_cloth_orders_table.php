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
        Schema::create('cloth_orders', function (Blueprint $table) {
            $table->id();
            $table->string('shop_name')->nullable();
            $table->string('order_id')->unique();
            $table->string('vendor_name')->nullable();
            $table->string('vendor_number')->nullable();
            $table->string('employee_number')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('customer_mobile')->nullable();
            $table->string('customer_email')->nullable();
            $table->text('customer_address')->nullable();
            $table->string('status')->nullable();
            $table->string('assigned_employee_mobile_number')->nullable();
            $table->string('wages_bill')->nullable();
            $table->string('total_bill')->nullable();
           
            $table->boolean('is_assigned')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cloth_orders');
    }
};
