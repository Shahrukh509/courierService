<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRouteSetupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('route_setups', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
         $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
         $table->string('pickup_district');
         $table->string('pickup_region');
         $table->string('drop_district');
         $table->string('drop_region');
         $table->string('route');
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
        Schema::dropIfExists('route_setups');
    }
}
