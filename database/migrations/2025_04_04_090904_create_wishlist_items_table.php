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
        Schema::create('wishlist_items', function (Blueprint $table) {
            $table->id('wishlist_item_id');
            $table->foreignId('wishlist_id')->constrained('wishlists', 'wishlist_id')->onDelete('cascade');
            $table->foreignId('flower_id')->constrained('products', 'product_id');
            $table->foreignId('chocolate_id')->constrained('products', 'product_id');
            $table->foreignId('packaging_id')->constrained('products', 'product_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wishlist_items');
    }
};
