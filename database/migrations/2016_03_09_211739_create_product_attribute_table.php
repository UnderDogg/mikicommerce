<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductAttributeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        /*Schema::create('product_attribute', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('product_category_id')->unsigned();
            $table->string('title');
            $table->string('attribute_set_name');
            $table->boolean('notnull')->default(true);
            $table->string('datatype');
            $table->timestamps();*/

            /*$table->foreign('product_category_id')->references('id')
                ->on('product_attribute_category')
                ->onDelete('cascade');* /
        });
            */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        //Schema::drop('product_attribute');
    }
}
