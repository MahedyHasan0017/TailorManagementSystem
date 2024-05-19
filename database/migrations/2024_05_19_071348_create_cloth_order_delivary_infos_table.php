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
        Schema::create('cloth_order_delivary_infos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cloth_order_id')->constrained('cloth_orders')->cascadeOnDelete();
            $table->string('majurir_poriman')->nullable();
            $table->string('nogod_prodan')->nullable();
            $table->string('montobbo_shirt_panjabi')->nullable();
            $table->string('orderer_tarikh')->nullable();
            $table->string('delivery_tarikh')->nullable();
            $table->string('montobbo_pant_pajama')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cloth_order_delivary_infos');
    }
};
