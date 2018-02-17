<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('makanan');
            $table->string('minuman');
            $table->string('hidangan_penutup');
            $table->string('status');
            $table->string('harga');
            $table->string('stok')->nullable();
            $table->string('product_code')->nullable();
            $table->string('supplier_code')->nullable();
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
        Schema::dropIfExists('restaurant_products');
    }
}
