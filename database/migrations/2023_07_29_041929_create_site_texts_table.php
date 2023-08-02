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
        Schema::create('site_texts', function (Blueprint $table) {
            $table->id();
            $table->string('logo',255)->nullable();
            $table->string('menu',255)->nullable();
            $table->text('second_section_ar')->nullable();
            $table->text('second_section_en')->nullable();
            $table->text('category_desc_ar')->nullable();
            $table->text('category_desc_en')->nullable();
            $table->text('flavor_desc_ar')->nullable();
            $table->text('flavor_desc_en')->nullable();
            $table->text('wholesale_desc_ar')->nullable();
            $table->text('wholesale_desc_en')->nullable();
            $table->text('order_desc_ar')->nullable();
            $table->text('order_desc_en')->nullable();
            $table->text('about_desc_ar')->nullable();
            $table->text('about_desc_en')->nullable();
            $table->string('about_image',255)->nullable();
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
        Schema::dropIfExists('site_texts');
    }
};
