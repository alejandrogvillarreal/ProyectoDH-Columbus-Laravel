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
          $table->string('name', 100);
          $table->decimal('price', 8, 2); // 999.999.99
          $table->integer('stock');
          $table->string('image', 100)->default('default.png');
          $table->unsignedInteger('category_id')->nullable();
          $table->foreign('category_id')->references('id')->on('categories');
          $table->unsignedInteger('brand_id')->nullable();
          $table->foreign('brand_id')->references('id')->on('brands');
          $table->unsignedInteger('user_id')->nullable();
          $table->foreign('user_id')->references('id')->on('users');
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
