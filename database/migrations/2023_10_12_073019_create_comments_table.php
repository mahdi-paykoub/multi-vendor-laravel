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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->unsignedBigInteger('commentable_id');
            $table->string('commentable_type');

            $table->boolean('approved')->default(false);
            $table->text('comment');

            $table->text('title')->nullable();
            $table->string('rate')->nullable();
            $table->text('positive_points')->nullable();
            $table->text('negative_points')->nullable();

            $table->unsignedBigInteger('parent_id')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
