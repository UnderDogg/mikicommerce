
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('parent_id')->nullable();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->boolean('status');
            $table->string('image');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('description');
            $table->timestamps();
            $table->softDeletes();


            /*$table->foreign('parent_id')->references('id')
                ->on('category')
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
        Schema::drop('category');
    }
}
