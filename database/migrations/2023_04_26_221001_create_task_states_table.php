<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('task_states', function (Blueprint $table) {
            $table->id();
            $table->integer('id_task');
            $table->integer('state');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('task_states');
    }
};
