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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('image');
//            $table->string('gallery');
            $table->text('short_desc');
            $table->longText('detail');
            $table->unsignedBigInteger('cate_id')->unsigned();
            $table->foreign('cate_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('ori_price');
            $table->integer('sell_price');
            $table->integer('view');
            $table->integer('sell');
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
