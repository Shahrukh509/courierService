<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('email'); //this is username
            $table->string('password');
            $table->string('name')->nullable();
            $table->string('mobile')->nullable();
            $table->string('user_email')->nullable();//Email
            $table->string('bussiness_name')->nullable();
            $table->text('fb_page_link')->nullable();
            $table->text('address')->nullable();
            $table->string('district')->nullable();
            $table->string('region')->nullable();
            //Delivery Boy
            $table->string('profile_image')->nullable();
            //All above mention
            $table->string('nid_number')->nullable();
            $table->string('nid_picture')->nullable();
            $table->string('driving_license_picture')->nullable();
            $table->string('vehical_name')->nullable();
            $table->string('vehical_number')->nullable();
            $table->string('assigned_district')->nullable();
            $table->string('assigned_region')->nullable();
            $table->string('type');
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
        Schema::dropIfExists('users');
    }
}
