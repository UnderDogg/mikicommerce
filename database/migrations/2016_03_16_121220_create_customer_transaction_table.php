<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomerTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('customer_transaction', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->integer('order_id')->unsigned();
            $table->longText('description');
            $table->integer('amount');
            $table->timestamps();
            $table->softDeletes();

            
            $table->foreign('customer_id')->references('id')
                ->on('customer_detail')
                ->onDelete('cascade');
            $table->foreign('order_id')->references('id')
                ->on('order')
                ->onDelete('cascade');
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
        Schema::drop('customer_transaction');
    }
}
