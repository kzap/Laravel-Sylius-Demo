<?php

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
            $table->increments('product_id');
            $table->string('product_amazon')->unique();
            $table->text('product_url');
            $table->string('product_name');
            $table->text('product_description');
            $table->decimal('product_price', 10, 2);
            $table->decimal('product_srp', 10, 2);
            $table->smallInteger('product_active');
            $table->timestamp('product_created');
            $table->timestamp('product_updated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('products');
    }
}
