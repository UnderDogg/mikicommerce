<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductAttributeCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     *///

    public function up()
    {
        //
        /*Schema::create('product_attribute_category', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->timestamps();

            
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        //Schema::drop('product_attribute_category');
    }
}
