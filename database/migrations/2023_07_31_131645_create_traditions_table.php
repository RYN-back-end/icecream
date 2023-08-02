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
        Schema::create('traditions', function (Blueprint $table) {
            $table->id();
            $table->string('image',255)->nullable();
            $table->string('title_ar',255)->nullable();
            $table->string('title_en',255)->nullable();
            $table->string('sub_title_ar',255)->nullable();
            $table->string('sub_title_en',255)->nullable();
            $table->text('desc_ar')->nullable();
            $table->text('desc_en')->nullable();
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
        Schema::dropIfExists('traditions');
    }
};
