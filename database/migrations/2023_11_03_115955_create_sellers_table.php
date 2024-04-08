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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number')->unique();
            $table->boolean('active')->default(false);
            $table->string('token')->nullable()->unique();
            $table->enum('status', array('approved', 'unapproved', 'approvedQueue', 'needToEdit'))->default('unapproved');
            $table->timestamps();
        });

        Schema::create('seller_verify_codes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
            $table->integer('code');
            $table->timestamp('expired_at');
            $table->boolean('is_used')->default(false);
            $table->unique(['seller_id', 'code']);
            $table->timestamps();
        });

        Schema::create('seller_infos', function (Blueprint $table) {
            $table->id();
            $table->enum('shop_status', array('personal', 'company'));
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('national_code')->nullable();
            $table->string('shop_code')->nullable();
            $table->string('shop_name')->nullable();
            $table->text('about_shop')->nullable();
            $table->string('shop_number')->nullable();
            $table->string('shop_website')->nullable();
            $table->text('shop_logo')->nullable();
            $table->date('shop_closed_days')->nullable();
            $table->string('cart_number')->nullable();
            $table->string('cart_name')->nullable();
            $table->string('confirmed_parts')->nullable();
            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
            $table->timestamps();
        });


        /*delete this*/
        Schema::create('seller_addresses', function (Blueprint $table) {
            $table->id();
            $table->text('shop_address');
            $table->text('shop_city');
            $table->text('shop_state');
            $table->text('plaque')->nullable();
            $table->text('postal_code');
            $table->unsignedBigInteger('seller_id');
            $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
            $table->timestamps();
        });


        /*Schema::create('s_shops_info', function (Blueprint $table) {

           $table->string('name');
            $table->string('email')->nullable();
            $table->string('national_code')->nullable();



            $table->id();
            $table->enum('shop_status', array('legal', 'genuine'));
            $table->string('shop_code');
            $table->string('shop_name');
            $table->text('about_shop');
            $table->string('shop_number');
            $table->string('shop_website');
            $table->text('shop_logo');
            $table->date('shop_closed_days');

            $table->unsignedBigInteger('sellers_info_id');
            $table->foreign('sellers_info_id')->references('id')->on('sellers_info')->onDelete('cascade');

            $table->timestamps();



            $table->string('cart_number');
            $table->string('cart_name');

            $table->string('doc_type');
            $table->text('doc_img');
            $table->text('expiration_doc_date');
            $table->text('contract_signature');





            $table->text('shop_text_address');

            $table->unsignedBigInteger('sellers_info_id');
            $table->foreign('sellers_info_id')->references('id')->on('sellers_info')->onDelete('cascade');

            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seller_verify_codes');
        Schema::dropIfExists('sellers');
    }
};
