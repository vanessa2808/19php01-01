<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Migrations\AddTitleToProductsTable;
use Illuminate\Database\Migrations\AddImageToProductsTable;
use Illuminate\Database\Migrations\AddDescriptionToProductsTable;
use Illuminate\Database\Migrations\RenameTitle;
class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('image');
            $table->string('description');
            $table->timestamps();
            $table->renameIndex('title', 'name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
