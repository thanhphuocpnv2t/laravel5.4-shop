<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('session_id');
            $table->integer('user_id');
            $table->string('tokbox_session');
            $table->dateTime('time_session');
            $table->string('tokbox_token');
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
        Schema::dropIfExists('online_visitors');
    }
}
