<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('templates', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('slug')->unique();

            $table->string('category')->nullable();

            $table->text('description')->nullable();

            $table->string('thumbnail')->nullable();

            $table->decimal('price', 12, 2)->default(0);

            $table->json('form_schema')->nullable();

            $table->json('default_payload')->nullable();

            $table->string('view_name')->nullable();

            $table->boolean('is_active')->default(true);

            $table->unsignedInteger('sort_order')->default(0);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('templates');
    }
};