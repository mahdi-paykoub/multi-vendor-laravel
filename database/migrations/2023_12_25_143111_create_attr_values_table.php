<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('attr_values', function (Blueprint $table) {
            $table->id();
            $table->string('value');
            $table->unsignedBigInteger('attr_id');
            $table->foreign('attr_id')->references('id')->on('attrs')->onDelete('cascade');
            $table->timestamps();
        });
        Schema::create('attr_product', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');

            $table->unsignedBigInteger('attr_id');
            $table->foreign('attr_id')->references('id')->on('attrs')->onDelete('cascade');

            $table->unsignedBigInteger('attr_value_id');
            $table->foreign('attr_value_id')->references('id')->on('attr_values')->onDelete('cascade');

            $table->unique(['product_id', 'attr_id', 'attr_value_id']);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attr_product');
        Schema::dropIfExists('attr_values');
    }
};
