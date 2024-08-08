<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('url')->nullable();
            $table->integer('update_date')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('address')->nullable();
            $table->string('user_name')->nullable();
            $table->string('password')->nullable();
            $table->string('server')->nullable();
            $table->string('folder')->nullable();
            $table->string('mode')->nullable();
            $table->integer('date')->nullable();
            $table->integer('call_date')->nullable();
            $table->string('response_type')->nullable();
            $table->string('database_detail')->nullable();
            $table->integer('status')->nullable();
            $table->integer('age')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
