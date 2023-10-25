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
    Schema::create('leads', function (Blueprint $table) {
      $table->id();
      $table->string('name', 100);
      $table->string('email', 150);
      $table->string('mobile', 20);
      $table->text('message')->nullable();
      $table->date('appointment_date')->nullable();
      $table->unsignedBigInteger('treatment_id')->nullable();
      $table->foreign('treatment_id')->references('id')->on('treatments')->cascadeOnDelete();
      $table->unsignedBigInteger('doctor_id')->nullable();
      $table->foreign('doctor_id')->references('id')->on('users')->cascadeOnDelete();
      $table->enum('type', ['inquiry', 'appointment'])->default('inquiry');
      $table->string('source')->nullable();
      $table->text('source_path')->nullable();
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('leads');
  }
};
