<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_characteristics', function (Blueprint $table) {
            $table->id();

            // Link to product
            $table->foreignId('product_id')
                  ->constrained('products')
                  ->cascadeOnDelete();

            // Generic, free-text fields as requested
            $table->string('attribute_name');   // e.g. 'taille', 'capacité'
            $table->string('value');            // e.g. 'S', 'M', 'L' or '25L'

            // Optional ordering if you want to sort them
            $table->unsignedSmallInteger('position')->default(0);

            $table->timestamps();

            // Helpful indexes
            $table->index(['product_id', 'attribute_name']);
            // Prevent exact duplicates for same product
            $table->unique(['product_id', 'attribute_name', 'value']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_characteristics');
    }
};
