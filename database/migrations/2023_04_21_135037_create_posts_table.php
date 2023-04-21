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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            //Method one
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            //Method two
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
/***
 * cascadeOnDelete
 * mithel fsa5et el user samir alors automatiquement yefsa5 tous les postes qui sont fait par le user effaccés
 *
 */

            $table->string('title', 4);
            $table->boolean('chek')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
