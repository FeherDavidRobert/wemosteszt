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
        Schema::create('riasztasok', function (Blueprint $table) {
            $table->id("rid");
            $table->dateTime("rogzitesi_ido");
            $table->float("tavolsag",4,2);
            $table->string("nev",20);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('riasztasok');
    }
};
