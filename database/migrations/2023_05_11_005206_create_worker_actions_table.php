<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('worker_actions', function (Blueprint $table) {
            $table->id();
            $table->integer('type');
            $table->integer('id_task')->nullable();
            $table->integer('id_worker');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('worker_actions');
    }
};
