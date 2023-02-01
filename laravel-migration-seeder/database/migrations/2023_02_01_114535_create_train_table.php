<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train', function (Blueprint $table) {
            $table -> id();
            $table -> string('run_name') -> nullable(true);
            $table -> integer('run_number') -> unique() -> unsigned();
            $table -> integer('price') -> unsigned();
            $table -> string('location_start');
            $table -> string('location_destination');
            $table -> date('start_time');
            $table -> date('end_time');
            $table -> timestamps();
        });
        Schema::create('travel', function (Blueprint $table) {
            $table -> id();
            $table -> foreign('train_id') -> references('id') -> on('train');
            $table -> string('agency_name');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train');
    }
};
