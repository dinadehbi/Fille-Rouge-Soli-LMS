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
        Schema::create('resultats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('qcm_id'); // Use unsignedBigInteger for foreign key
            $table->unsignedBigInteger('apprenant_id'); // Ensure apprenant_id is also unsignedBigInteger
            $table->float('score');
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        
            // Add foreign key constraints
            $table->foreign('qcm_id')->references('id')->on('qcms')->onDelete('cascade');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resultats');
    }
};
