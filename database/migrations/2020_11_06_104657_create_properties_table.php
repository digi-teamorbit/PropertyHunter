<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
            $table->increments('id');
            $table->timestamps();
            $table->string('category')->nullable();
            $table->string('Name')->nullable();
            $table->string('Short_description')->nullable();
            $table->string('Property price')->nullable();
            $table->string('Permit Number')->nullable();
            $table->string('Licence Number')->nullable();
            $table->string('Registration Number')->nullable();
            $table->string('BEDROOMS')->nullable();
            $table->string('BATHROOMS')->nullable();
            $table->string('SIZE')->nullable();
            $table->string('detail')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('properties');
    }
}
