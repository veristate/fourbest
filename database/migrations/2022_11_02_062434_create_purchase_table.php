<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase', function (Blueprint $table) {
            $table->bigIncrements('purchaseID');
            $table->bigInteger('harga');
            $table->bigInteger('quantity');
            $table->bigInteger('total');
            $table->unsignedBigInteger('barangID')->unsigned();
            $table->foreign('barangID')->references('barangID')->on('barang')->onDelete('cascade');
            $table->unsignedBigInteger('purchaseorderID')->unsigned();
            $table->foreign('purchaseorderID')->references('purchaseorderID')->on('purchaseorder')->onDelete('cascade');
            $table->unsignedBigInteger('supplierID')->unsigned();
            $table->foreign('supplierID')->references('supplierID')->on('supplier')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('purchase');
    }
}
