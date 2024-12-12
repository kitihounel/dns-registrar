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
        Schema::create('domain_requests', function (Blueprint $table) {
            $table->id();
            // Informations du client
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->string('address')->nullable();
    
            // Informations du domaine
            $table->string('domain_name');
            $table->string('extension');
            $table->integer('duration'); // Durée en années
            $table->boolean('whois_protection'); // 1 = Oui, 0 = Non
    
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('domain_requests');
    }
};
