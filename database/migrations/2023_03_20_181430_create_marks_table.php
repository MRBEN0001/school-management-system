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
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            //THE constrained method creates a relationship with the user
            $table->foreignId("user_id")->constrained();
            $table->foreignId("course_id")->constrained();
            $table->integer("quiz_mark");
            $table->integer("assignment_mark");
            $table->integer("exam_mark");
            $table->integer("total");
            $table->string("grade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};
