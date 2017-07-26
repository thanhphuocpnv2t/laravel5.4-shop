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
            $table->increments('id');
            $table->string('name');
            $table->double('price');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('short_desciption');
            $table->text('description');
            $table->double('shipping_cost');
            $table->integer('producer_id')->unsigned();
            $table->foreign('producer_id')
                ->references('id')->on('producers')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('is_active');
            $table->double('sell_amount');
            $table->integer('sell_qty');
            $table->integer('ordered_count');
            $table->integer('is_special');
            $table->integer('quantity');
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
