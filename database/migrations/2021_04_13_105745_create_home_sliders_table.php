<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_sliders', function (Blueprint $table) {
            $table->id();

            $table->string('photo', 250);
            $table->string('url', 250)->nullable();

            $table->string('title_hy', 250);
            $table->text('description_hy');
            $table->string('button_hy', 250);

            $table->string('title_ru', 250)->nullable();
            $table->text('description_ru')->nullable();
            $table->string('button_ru', 250)->nullable();

            $table->string('title_en', 250)->nullable();
            $table->text('description_en')->nullable();
            $table->string('button_en', 250)->nullable();

            $table->integer('type');

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
        Schema::dropIfExists('home_sliders');
    }
}
