<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string("name",50);
            $table->string("slug",50);
            $table->string("description",100)->nullable();
            $table->string("location",50);
            $table->string("lat",50);
            $table->string("log",50);
           
            $table->timestamps();
        });

        Schema::create('properties_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('properties_id');
            $table->string('name',50);
            $table->string('link',50);
            $table->foreign('properties_id')->references('id')->on('properties') 
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('properties');
        Schema::dropIfExists('properties_images');
    }
}
