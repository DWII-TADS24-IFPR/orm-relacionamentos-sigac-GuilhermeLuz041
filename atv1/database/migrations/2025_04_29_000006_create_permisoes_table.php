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
        Schema::create('permisoes', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('roles_id');
            $table->foreign('roles_id')->references('id')->on('roles')->onDelete('cascade');
            
            $table->unsignedBigInteger('resources_id');
            $table->foreign('resources_id')->references('id')->on('resources')->onDelete('cascade');
            
            $table->boolean('permission');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permisoes');
    }
};
