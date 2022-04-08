<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUstBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ust_business', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('address',100);
            $table->string('nit',12);
            $table->string('legal_representative',50);
            $table->string('document_id',12);
            $table->string('helper',255);
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
        Schema::dropIfExists('ust_business');
    }
}
