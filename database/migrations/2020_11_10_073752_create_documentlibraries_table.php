<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentlibrariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentlibraries', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('doc_title')->nullable();
            $table->string('file')->nullable();
            $table->string('Type')->nullable();
            $table->string('form_category')->nullable();
            $table->string('description')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('documentlibraries');
    }
}
