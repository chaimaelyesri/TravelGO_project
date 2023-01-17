<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();

            $table->string('paymentmethod')->nullable();
            $table->string('name_card_bookign')->nullable();
            $table->string('card_number')->nullable();
            $table->string('expire_month')->nullable();
            $table->string('expire_year')->nullable();
            $table->string('ccv')->nullable();

            $table->string('country')->nullable();
            $table->string('address')->nullable();
            $table->string('address2')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postalcode')->nullable();

            $table->string('cartitems')->nullable();
            $table->string('cart_total')->nullable();
            $table->string('cart_tax')->nullable();
            $table->string('cart_subtotal')->nullable();
            $table->integer('statut')->nullable();

            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
