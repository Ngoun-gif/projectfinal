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
        Schema::create('premission_role', function (Blueprint $table) {
            $table->unsignedBigInteger('premission_id');
            $table->unsignedBigInteger('role_id');

            $table->foreign('premission_id')
                  ->references('id')
                  ->on('premission')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            
                  $table->foreign('role_id')
                  ->references('id')
                  ->on('roles')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('premission_role');
    }
};
