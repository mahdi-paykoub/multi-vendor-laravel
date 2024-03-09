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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->text('price');
            $table->enum('status', ['unpaid', 'paid', 'preparation', 'posted', 'received', 'cancel']);
            $table->text('tracking_serial')->nullable();
            $table->timestamps();
        });
        Schema::create('order_product_info', function (Blueprint $table) {
            $table->unsignedBigInteger('product_info_id');
            $table->foreign('product_info_id')->references('id')->on('product_infos')->onDelete('cascade');
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->integer('quantity');
            $table->primary(['order_id' , 'product_info_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_product');
    }
};
