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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('group_Client'); // Ajout du champ group_Client
            $table->string('type_Client'); // Ajout du champ type_Client
            $table->string('Num_Téléphone'); // Ajout du champ Num_Téléphone
            $table->string('Devise'); // Ajout du champ Devise
            $table->string('Pays'); // Ajout du champ Pays
            $table->string('Région'); // Ajout du champ Région
            $table->string('Etat')->nullable(); // Ajout du champ Etat (nullable)
            $table->string('Ville')->nullable(); // Ajout du champ Ville (nullable)
            $table->string('Code_Postal')->nullable(); // Ajout du champ Code_Postal (nullable)
            $table->string('Adresse')->nullable(); // Ajout du champ Adresse (nullable)
            $table->date('Données_valides_jusquà')->nullable(); // Ajout du champ Données_valides_jusquà (nullable)
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
