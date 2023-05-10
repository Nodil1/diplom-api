<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('geo_points', function (Blueprint $table) {
            $table->id();
            $table->integer("id_worker");
            $table->point("location");
            $table->dateTime("created_at");
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('geo_points');
    }
};
