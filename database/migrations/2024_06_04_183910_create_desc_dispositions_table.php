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
        Schema::create('desc_dispositions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dispositionId');
            $table->unsignedBigInteger('applicationId');
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('forwardId');
            $table->string('keterangan');
            $table->foreign('dispositionId')->references('id')->on('dispositions')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('applicationId')->references('id')->on('applications')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('userId')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('forwardId')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('desc_dispositions');
    }
};
