<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('category_id')->unsigned();

            $table->string('name');
            $table->string('slug')->nullable();
            $table->string('sku');


            //$table->integer('tax_id')->unsigned();
            //$table->float('price', 8, 3);
            //$table->float('previous_price', 8, 3);
            //$table->string('currency');
            //$table->integer('stock');
            //$table->boolean('live');
            //$table->string('location');
            //$table->boolean('unlimited');
            //$table->boolean('is_downloadable');
            $table->string('img_big');
            $table->string('img_medium');
            $table->string('img_small');

            $table->string('cart_description');
            $table->string('short_description');
            $table->longText('long_description');

            $table->timestamps();
            $table->softDeletes();

            
            /*$table->foreign('category_id')->references('id')
                ->on('category')
                ->onDelete('cascade');*/

            /*$table->foreign('tax_id')->references('id')
                ->on('tax')
                ->onDelete('cascade');*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::drop('products');
    }
}
