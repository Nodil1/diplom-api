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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->text('description');
            $table->text('address');
            $table->text('customer');
            $table->integer("task_type");
            $table->float('latitude');
            $table->float('longitude');
            $table->integer('state');
            $table->dateTime('expired_at');
            $table->dateTime('finished_at')->nullable()->default(null);
            $table->integer("id_worker")->nullable()->default(null);
            $table->integer("id_parent_task")->nullable()->default(null);
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
};
