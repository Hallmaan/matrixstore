<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStationaryProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stationary_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('alat_tulis');
            $table->string('alat_hapus');
            $table->string('kertas');
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
        Schema::dropIfExists('stationary_products');
    }
}
