<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    // database/migrations/xxxx_xx_xx_create_resultats_table.php

    public function up()
    {
        Schema::create('resultats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('qcm_id')->constrained('qcms')->onDelete('cascade');
            $table->foreignId('apprenant_id')->constrained('apprenants')->onDelete('cascade');
            $table->float('score');
            $table->timestamp('completed_at');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resultats');
    }

};
