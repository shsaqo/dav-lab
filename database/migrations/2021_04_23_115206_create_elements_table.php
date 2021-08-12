<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->id();
            $table->string('name_hy', 250);
            $table->string('name_ru', 250)->nullable();
            $table->string('name_en', 250)->nullable();
            $table->string('price')->nullable();
            $table->text('prompt_text_hy')->nullable();
            $table->text('prompt_text_ru')->nullable();
            $table->text('prompt_text_en')->nullable();

            $table->foreignId('analysis_category_id')
                ->constrained()
                ->onDelete('cascade');

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
        Schema::dropIfExists('elements');
    }
}
