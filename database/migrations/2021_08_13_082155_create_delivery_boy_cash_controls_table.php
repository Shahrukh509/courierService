<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeliveryBoyCashControlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('delivery_boy_cash_controls', function (Blueprint $table) {
            $table->id();
         $table->unsignedBigInteger('user_id');
         $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
         $table->char('username')->nullable();
            $table->integer('cash_amount')->nullable();
            $table->text('notes')->nullable();
            $table->time('time');
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
        Schema::dropIfExists('delivery_boy_cash_controls');
    }
}
