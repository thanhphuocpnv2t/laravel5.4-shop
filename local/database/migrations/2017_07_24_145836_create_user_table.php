<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->integer('gender');
            $table->string('email');
            $table->string('password');
            $table->string('passwordreset');
            $table->integer('role');
            $table->ipAddress('ipaddress');
            $table->string('fname');
            $table->date('birthday');
            $table->string('avarta');
            $table->string('address');
            $table->string('phone', 40);
            $table->string('street');
            $table->string('nr');
            $table->integer('postcode');
            $table->string('city');
            $table->integer('country_id');
            $table->string('shipping_street', 100);
            $table->string('shipping_nr', 100);
            $table->string('shipping_ext_information', 100);
            $table->integer('shipping_postcode');
            $table->string('shipping_city');
            $table->integer('shipping_country_id');
            $table->string('shipping_fname', 40);
            $table->string('shipping_lname', 40);
            $table->string('shipping_phone', 40);
            $table->integer('status');
            $table->dateTime('last_logged');

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
        Schema::drop('users');
    }
}
