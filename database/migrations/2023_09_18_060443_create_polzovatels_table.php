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
        Schema::create('polzovatels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name')->nullable();
            $table->text('phone-number')->nullable();
            $table->boolean('sms')->nullable();
            $table->text('date')->nullable();
            $table->text('email')->nullable();
            $table->text('skype')->nullable();
            $table->text('status')->nullable();
            $table->text('functionality')->nullable();
            $table->integer('prior')->nullable();;
            $table->text('phone')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('polzovatels');
    }
};
