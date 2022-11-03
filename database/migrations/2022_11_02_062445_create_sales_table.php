<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->bigIncrements('salesID');
            $table->unsignedBigInteger('barangID')->unsigned();
            $table->foreign('barangID')->references('barangID')->on('barang')->onDelete('cascade');
            $table->unsignedBigInteger('salesorderID')->unsigned();
            $table->foreign('salesorderID')->references('salesorderID')->on('salesorder')->onDelete('cascade');
            $table->unsignedBigInteger('customerID')->unsigned();
            $table->foreign('customerID')->references('customerID')->on('customer')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sales');
    }
}
