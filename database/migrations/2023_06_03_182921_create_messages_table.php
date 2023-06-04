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
        Schema::create('messages', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name',100);
            $table->string('email',100)->nullable();;
            $table->string('phone',100)->nullable();
            $table->string('subject',100)->nullable();
            $table->string('message',110)->nullable();
            $table->string('note', 100)->nullable();;
            $table->string('ip', 100)->nullable();;
            $table->string('status', length: 7)->default('New');
            $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('massages');
    }
};
