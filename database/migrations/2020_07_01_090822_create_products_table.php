<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('brand_id')->default(0);
            $table->string('sku');
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->text('caracteristique')->nullable();
            $table->unsignedBigInteger('quantity');
            $table->double('height')->nullable();
            $table->integer('price')->nullable();
            $table->integer('sale_price')->nullable();
            $table->boolean('status')->default(false);
            $table->boolean('featured')->default(false);
            $table->integer('stock')->nullable()->default('1');
            $table->boolean('is_new')->nullable()->default(false);
            $table->text('product_image');
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
