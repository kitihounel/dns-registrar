<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('domains', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name')->unique();
            $table->string('extension'); // Extension du domaine (ex : .com)
            $table->integer('duration'); // Durée d'enregistrement en années
            $table->boolean('whois_protection'); // Protection Whois (1 = Oui, 0 = Non)
            $table->boolean('active')->default(true);
            $table->foreignId('request_id')->unique()->constrained('requests', 'id')->onDelete('restrict');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domains');
    }
};
