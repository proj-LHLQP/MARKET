<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->bigInteger('seller_id')->nullable();
            $table->bigInteger('buyer_id')->nullable();
            $table->text('gallery')->nullable();
            $table->text('detail')->nullable();
            $table->double('price')->nullable();
            $table->tinyInteger('new');
            $table->tinyInteger('active');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('products');
    }
}
