<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120);
            $table->unsignedTinyInteger('priority')->default(0)->comment('Task Priority (0: Low, 1: Medium, 2: High, 3: Urgent)');
            $table->text('description')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedInteger('project_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('job_id');
            $table->unsignedTinyInteger('hours');
            $table->unsignedTinyInteger('status')->default(0)->comment('Task Status (0: To Do, 1: Process, 2: Testing, 3: Feedback, 4: Done, 5: Deactive)');
            $table->timestamps();
            
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('job_id')->references('id')->on('jobs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
