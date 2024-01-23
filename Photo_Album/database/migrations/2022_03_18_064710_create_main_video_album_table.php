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
        Schema::create('main_video_album', function (Blueprint $table) {
            $table->id('mV_id');
            $table->string('mV_title', 200)->nullable();
            $table->text('mV_link')->nullable();
            $table->unsignedBigInteger('m_id');
            $table->foreign('m_id')->references('m_id')->on('main_album');
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
        Schema::dropIfExists('main_video_album');
    }
};
