<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaskTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('adder_id');
            $table->foreign('adder_id')->references('id')->on("users")->onDelete('cascade');
            $table->string('name')->unique();
            $table->float('points')->default(0.0);
            $table->float('price')->default(0.0);
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
        Schema::dropIfExists('task_types');
    }
}
