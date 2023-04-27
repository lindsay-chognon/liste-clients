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
        Schema::table('noms_de_domaines', function (Blueprint $table) {
            $table->foreignId('client_id')->constrained('clients')->after('cout_annuel');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('noms_de_domaines', function (Blueprint $table) {
            //
        });
    }
};
