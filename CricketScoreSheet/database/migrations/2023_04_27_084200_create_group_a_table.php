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
        Schema::create('Group_A_players', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('email');
            $table->string('town');
            $table->string('rno');
            $table->string('card');
            $table->string('faculty');
            $table->string('postures');
            $table->string('balling_postures');
            $table->string('batting_side');
            $table->string('bolling_hand');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Group_A_players');
    }
};
