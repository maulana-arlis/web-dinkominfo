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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('address');
            $table->string('phone_number');
            $table->string('faq_number');
            $table->string('email1');
            $table->string('email2');
            $table->string('operasional_days');
            $table->string('operasional_times');
            $table->text('twitter_url');
            $table->text('facebook_url');
            $table->text('instagram_url');
            $table->text('maps_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
