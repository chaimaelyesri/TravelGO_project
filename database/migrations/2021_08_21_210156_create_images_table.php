<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('path')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('activity_id')->nullable();;
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
            $table->unsignedBigInteger('adventure_id')->nullable();;
            $table->foreign('adventure_id')->references('id')->on('adventures')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images');
    }
}
