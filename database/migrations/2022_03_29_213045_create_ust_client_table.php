<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUstClientTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ust_client', function (Blueprint $table) {
            $table->bigIncrements('id',20);
            $table->string('name',50);
            $table->string('last_name',50);
            $table->foreignId('document_type')->references('id')->on('ust_document_type')->onDelete('cascade');
            $table->string('document',12);
            $table->string('email',100);
            $table->string('phone',12);
            $table->string('address',100);
            $table->string('photo',255)->nullable();
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
        Schema::dropIfExists('ust_client');
    }
}
