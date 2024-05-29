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
        Schema::create('subscription_payments', function (Blueprint $table) {
            $table->id();
            $table->string('our_mobile_number');
            $table->string('payment_request_id');
            $table->string('number_of_tailor');
            $table->string('time_span');
            $table->string('mobile_number');
            $table->string('transection_id');
            $table->string('total_amount');
            $table->boolean('is_approved')->default(false);
            $table->string('vendor_identity');
            $table->string('vendor_mobile_number');
            $table->string('vendor_status');
            $table->timestamps();

            // $table->unsignedBigInteger('vendor_id');
            // $table->foreign('vendor_id')
            // ->on('vendors')
            // ->references('id');

            // $table->foreignId('vendor_id')->constrained('vendors')->cascadeOnDelete();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscription_payments');
    }
};
