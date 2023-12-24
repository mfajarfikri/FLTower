<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bays', function (Blueprint $table) {
            $table->id();
            $table->string('name_bay');
            $table->foreignId('gardu_id');
            $table->decimal('long')->nullable();
            $table->decimal('lat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bays');
    }
};
