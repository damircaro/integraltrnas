<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUstContactUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ust_contact_us', function (Blueprint $table) {
            $table->id();
            $table->foreignId('business')->references('id')->on('ust_business')->onDelete('cascade');
            $table->string('namee',100);
            $table->string('email',100);
            $table->string('cell_phone',12);
            $table->string('message',255);
            $table->boolean('status')->nullable()->default(false);
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
        Schema::dropIfExists('ust_contact_us');
    }
}
