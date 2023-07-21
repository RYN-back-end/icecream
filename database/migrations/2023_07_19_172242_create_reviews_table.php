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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->string('image',255)->nullable();
            $table->string('name_ar',255);
            $table->string('name_en',255);
            $table->text('desc_ar');
            $table->text('desc_en');
            $table->string('written_at_ar',255)->default('عبر فيسبوك');
            $table->string('written_at_en',255)->default('Facebook Comment');
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
        Schema::dropIfExists('reviews');
    }
};
