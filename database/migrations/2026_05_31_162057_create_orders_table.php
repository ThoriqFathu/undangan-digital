<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->string('invoice_number')->unique();

            $table->string('customer_name');
            $table->string('customer_phone');
            $table->string('customer_email')->nullable();

            $table->decimal('amount', 12, 2);

            $table->string('payment_gateway')->nullable();
            $table->string('payment_reference')->nullable();

            $table->enum('status', [
                'pending',
                'paid',
                'expired',
                'cancelled'
            ])->default('pending');

            $table->timestamp('paid_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};