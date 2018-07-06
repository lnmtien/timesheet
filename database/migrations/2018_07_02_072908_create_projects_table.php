<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120);
            $table->unsignedInteger('pm_id');
            $table->unsignedInteger('pl_id');
            $table->text('description')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->date('kick_off');
            $table->date('sign_off');
            $table->unsignedTinyInteger('status')->default(0)->comment('Project Status (0: Open, 1: Close, 2: Deactive)');
            $table->timestamps();
            
            $table->foreign('pm_id')->references('id')->on('users');
            $table->foreign('pl_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
