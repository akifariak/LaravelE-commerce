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
        Schema::create('settings', function (Blueprint $table) {
            $table->autoIncrement();
            $table->string('title' ,150)->nullable();
            $table->string('keywords' ,150)->nullable();
            $table->string('description' ,150)->nullable();
            $table->string('company' ,150)->nullable();
            $table->string('address' ,150)->nullable();
            $table->string('phone' ,150)->nullable();
            $table->string('fax' ,150)->nullable();
            $table->string('email' ,150)->nullable();
            $table->string('smtpserver' ,150)->nullable();
            $table->string('smtpemail' ,150)->nullable();
            $table->string('smtppassword' ,150)->nullable();
            $table->string('smtpport' ,150)->nullable()->default(0);
            $table->string('facebook' ,150)->nullable();
            $table->string('instagram' ,150)->nullable();
            $table->string('twitter' ,150)->nullable();
            $table->string('youtube' ,150)->nullable();
            $table->text('aboutus')->nullable();
            $table->text('contact' )->nullable();
            $table->text('references' )->nullable();
            $table->string('icon' ,50)->nullable();
            $table->string('status' ,5)->nullable()->default('False');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
