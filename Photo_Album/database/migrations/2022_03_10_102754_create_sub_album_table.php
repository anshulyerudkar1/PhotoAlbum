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
        Schema::create('sub_album', function (Blueprint $table) {
            $table->id('s_id');
            $table->string('s_title', 200)->nullable();
            $table->text('s_link')->nullable();
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
        Schema::dropIfExists('sub_album');
    }
};
