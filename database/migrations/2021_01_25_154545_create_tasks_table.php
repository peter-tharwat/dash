<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->bigIncrements('id');
            $table->unsignedBigInteger('adder_id');
            $table->foreign('adder_id')->references('id')->on("users")->onDelete('cascade');
            $table->unsignedBigInteger('to_user');
            $table->foreign('to_user')->references('id')->on("users")->onDelete('cascade');

            $table->unsignedBigInteger('task_type_id');
            $table->foreign('task_type_id')->references('id')->on("task_types")->onDelete('cascade');
            $table->timestamp('deadline')->nullable();
            $table->float('points')->default(0.0);
            $table->text('link')->nullable();
            $table->string('file')->nullable();

            $table->string('admin_status')->default('PENDING');
            $table->string('user_status')->default('PENDING');
            $table->text('note_to_admin')->nullable();
            $table->text('note_to_employee')->nullable();

            $table->timestamp('item_deleted_at')->nullable();
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
        Schema::dropIfExists('tasks');
    }
}
