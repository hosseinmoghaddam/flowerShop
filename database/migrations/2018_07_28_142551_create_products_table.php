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
            $table->increments('id')->index();;
            $table->string('name');
            $table->text('description');
            $table->string('image1')->default('1.jpg');
            $table->string('image2')->default('1.jpg');
            $table->string('image3')->default('1.jpg');
            $table->string('image4')->default('1.jpg');
            $table->double('rate')->default(0);
            $table->double('price');
            $table->double('count')->default(0);
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
