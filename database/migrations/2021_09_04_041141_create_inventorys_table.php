<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventorys', function (Blueprint $table) {
            $table->bigIncrements('id_inventory');
            $table->bigInteger('id_obat')->unsigned();
            $table->foreign('id_obat')->references('id_obat')->on('obats')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('id_supplier')->unsigned();
            $table->foreign('id_supplier')->references('id_supplier')->on('suppliers')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('stok');
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
        Schema::dropIfExists('inventorys');
    }
}
