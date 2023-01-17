<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivityTbl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
        $table->id();
        $table->string('city')->nullable();
        $table->string('country')->nullable();
        $table->string('description')->nullable();
        $table->string('image')->nullable();
        $table->timestamps();
        });

        Schema::create('adventures', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('small_description')->nullable();
            $table->text('description')->nullable();
            $table->text('location')->nullable();
            $table->text('price')->nullable();
            $table->text('cover')->nullable();
            $table->date('stardate')->nullable();
            $table->date('enddate')->nullable();
            $table->text('level')->nullable();
            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');
            $table->timestamps();
        });


        Schema::create('activities', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->text('category')->nullable();
            $table->text('program')->nullable();
            $table->text('description1')->nullable();
            $table->text('description2')->nullable();
            $table->text('price')->nullable();
            $table->date('datedebut')->nullable();
            $table->date('datefin')->nullable();
            $table->text('cover')->nullable();
            $table->text('adresse')->nullable();

            $table->unsignedBigInteger('city_id');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('cascade');

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
        Schema::dropIfExists('adventures');
        Schema::dropIfExists('activities');
        Schema::dropIfExists('cities');
    }

}
