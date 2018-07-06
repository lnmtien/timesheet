<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLanguageContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('language_contents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('field', 30);
            $table->text('content');
            $table->unsignedInteger('lang_id');
            $table->timestamps();
            
            $table->foreign('lang_id')->references('id')->on('languages');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('language_contents');
    }
}
