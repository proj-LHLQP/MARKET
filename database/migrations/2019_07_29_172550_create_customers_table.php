<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('avatar')->nullable();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->double('wallet')->default(0);
            $table->double('wallet_freeze')->default(0);
            $table->bigInteger('reward')->nullable();
            $table->unsignedTinyInteger('active')->default(1);
            $table->string('password');
            $table->string('provider');
            $table->string('provider_id');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
