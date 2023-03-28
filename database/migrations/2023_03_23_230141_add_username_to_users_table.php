<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void //se ejecuta cuando realizas la migracion php artisan migrate
    {
        Schema::table('users', function (Blueprint $table) {
            $table ->string('username')->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void  //Cuando ejecutamos un roll back se ejecuta el down
    {
        Schema::table('users', function (Blueprint $table) {
            $table ->dropColumn('username');
        });
    }
};
