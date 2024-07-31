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
        Schema::table('instances', function (Blueprint $table) {
            $table->string('auth_token')->nullable();
            $table->timestamp('token_expires_at')->nullable();
            $table->string('dolibarr_password')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
   public function down()
    {
        Schema::table('instances', function (Blueprint $table) {
            $table->dropColumn(['auth_token', 'token_expires_at', 'dolibarr_password']);
        });
    }
};
