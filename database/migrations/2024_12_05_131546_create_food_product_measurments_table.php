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
        Schema::create('food_product_measurment_price_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('food_product_id');
            $table->foreign('food_product_id')->references('id')->on('food_products')->onDelete('cascade'); 
            $table->string('parameter');
            $table->string('unit');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            
            $table->timestamp('deleted_at')->nullable(); 
           
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_product_measurments');
    }
};
