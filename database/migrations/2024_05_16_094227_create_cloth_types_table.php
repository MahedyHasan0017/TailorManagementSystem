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
        Schema::create('cloth_types', function (Blueprint $table) {
            $table->id();
            $table->string('cloth_name') ; 
            $table->string('cloth_price') ; 
            $table->string('dress_type')->nullable() ; 
            $table->string('dress_wages')->nullable() ;
            $table->string('vendor_id')->nullable() ; 
            $table->string('admin_id')->nullable() ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cloth_types');
    }
};
