<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateShippingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        /*Schema::create('shipping', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->string('country');
            $table->string('region');
            $table->string('zipcode');
            $table->string('address');
            $table->string('address2');
            $table->timestamps();
            $table->softDeletes();

            
            $table->foreign('customer_id')->references('id')
                ->on('customer_detail')
                ->onDelete('cascade');
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
        //SChema::drop('shipping');
    }
}
