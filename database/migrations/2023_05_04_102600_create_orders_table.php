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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('product_title')->nullable();
            $table->string('product_id')->nullable();
            $table->string('price')->nullable();
            $table->string('quantity')->nullable();
            $table->string('image')->nullable();
            $table->string('tracking_id')->nullable();
            $table->enum('delivery_status', ['processing', 'packaging', 'shipped', 'on_the_way', 'delivered'])->nullable()->default(null);
            $table->enum('payment_status', ['pending', 'paid','cancelled','refunded', 'cash_on_delivery','failed'])->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
