<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewrecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newrecords', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('firstname');
                       
                        $table->string('middlename')->nullable();
                        $table->string('lastname');
                        $table->string('city');
                        $table->string('state');
                        $table->integer('zip')->nullable();
                        $table->string('optional')->nullable();
                        $table->string('email')->unique();
                        $table->string('profession')->nullable();
                        $table->integer('age')->nullable();
                        $table->string('type');
                        $table->integer('guestno');
                        $table->integer('noroom');
                        $table->string('alloted');
                        $table->string('spa')->nullable();
                        $table->string('ac')->nullable();
                        $table->string('parking')->nullable();
                        $table->string('food')->nullable();
                        $table->string('transport')->nullable();

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
        Schema::dropIfExists('newrecords');
    }
}

  