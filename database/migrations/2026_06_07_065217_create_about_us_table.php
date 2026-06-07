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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->string('date'); // 2009-2011 أو March 2011
            $table->string('title'); // An Agency is Born
            $table->text('description'); // النص
            $table->string('image')->nullable(); // الصورة
            $table->boolean('is_inverted')->default(false); // يمين/شمال
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
