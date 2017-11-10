<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('sku');
            $table->string('img');
            $table->string('title');
            $table->string('keywords');
            $table->string('description');
            $table->string('content');
            $table->decimal('price',10,0);
            $table->integer('category_id')->default(0);
            $table->integer('brand_id')->default(0);
            $table->integer('preview')->default(0);
            $table->integer('active')->default(0);
            $table->integer('position')->default(0);
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
        Schema::dropIfExists('products');
    }
}
