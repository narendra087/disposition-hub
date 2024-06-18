<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('letter_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('disposition_id');
            $table->string('name');
            $table->integer('status')->nullable();
            $table->foreign('disposition_id')->references('id')->on('dispositions')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('letter_results');
    }
};
