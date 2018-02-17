<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
            $table->string('store_name')->nullable();
            $table->string('store_address')->nullable();
            $table->string('store_type')->nullable();
            $table->string('store_slogan')->nullable();
            $table->string('email', 191)->unique();
            $table->string('password');
            $table->tinyInteger('role')->default(1);
            $table->string('supplier_code')->nullable();
             $table->string('status')->nullable();
            $table->rememberToken();
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
