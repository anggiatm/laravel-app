<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceBTCSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_b_t_c_s', function (Blueprint $table) {
            $table->id();
            $table->double('open', 12, 2);
            $table->double('high', 12, 2);
            $table->double('low', 12, 2);
            $table->double('close', 12, 2);
            $table->DateTime('time');
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
        Schema::dropIfExists('price_b_t_c_s');
    }
}
