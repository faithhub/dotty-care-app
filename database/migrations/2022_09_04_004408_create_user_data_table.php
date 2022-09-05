<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('paramedic_id')->constrained('users')->cascadeOnDelete();
            $table->text('call_details')->nullable();
            $table->text('assessment')->nullable();
            $table->text('treatment')->nullable();
            $table->text('file')->nullable();
            $table->boolean('is_call_details_filled')->default(false);
            $table->boolean('is_assessment_filled')->default(false);
            $table->boolean('is_treatment_filled')->default(false);
            $table->boolean('is_filled')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_data');
    }
};