<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsFreshesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_freshes', function (Blueprint $table) {
            $table->id();

            $table->string('title_hy', 250);
            $table->text('text_hy');

            $table->string('title_ru', 250)->nullable();
            $table->text('text_ru')->nullable();

            $table->string('title_en', 250)->nullable();
            $table->text('text_en')->nullable();

            $table->string('url', 250);
            $table->integer('type');
            $table->string('photo', 250);

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
        Schema::dropIfExists('news_freshes');
    }
}
