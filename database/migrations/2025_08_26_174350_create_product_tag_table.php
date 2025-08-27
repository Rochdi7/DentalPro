<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('product_tag', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade');
            $table->foreignId('product_tag_id')->constrained('product_tags')->onDelete('cascade');
            $table->primary(['product_id', 'product_tag_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_tag');
    }
};
