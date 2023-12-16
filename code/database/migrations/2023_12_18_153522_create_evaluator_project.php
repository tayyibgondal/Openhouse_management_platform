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
        Schema::create('evaluator_project', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('evaluator_id');
            $table->unsignedBigInteger('project_id');

            $table->foreign('evaluator_id')->references('id')->on('evaluators');
            $table->foreign('project_id')->references('id')->on('projects');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('evaluator_project');
    }
};
