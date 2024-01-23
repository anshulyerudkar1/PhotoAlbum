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
        Schema::create('sub_img_album', function (Blueprint $table) {
            $table->id('sI_id');
            $table->string('sI_title', 200)->nullable();
            $table->text('sI_link')->nullable();
            $table->unsignedBigInteger('s_id');
            $table->foreign('s_id')->references('s_id')->on('sub_album');
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
        Schema::dropIfExists('sub_img_album');
    }
};
