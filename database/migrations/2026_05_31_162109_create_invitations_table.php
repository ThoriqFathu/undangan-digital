<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('invitations', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignId('template_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('slug')->unique();

            $table->string('customer_name');

            $table->date('event_date')->nullable();

            $table->enum('status', [
                'draft',
                'published',
                'expired'
            ])->default('draft');

            $table->json('payload');

            $table->timestamp('published_at')->nullable();
            $table->timestamp('expired_at')->nullable();

            $table->timestamps();

            $table->index('event_date');
            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('invitations');
    }
};