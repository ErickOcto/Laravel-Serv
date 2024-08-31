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
        Schema::create('user_experiences', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_detail_id')->constrained();
            $table->string('experience_title');
            $table->longText('experience_description');
            $table->date('start_date');
            $table->date('end_date')->nullable();
            $table->string('company_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_experiences');
    }
};
