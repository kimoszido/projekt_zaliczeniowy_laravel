<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsOpinionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_opinion', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_product')->index()->unsigned();
            $table->bigInteger('id_user')->index()->unsigned();
            $table->string('content', 1000);
            $table->dateTime('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_opinion');
    }
}
