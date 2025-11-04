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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique(); // e.g., ORD-20231103-001
            $table->enum('status', [
                'pending',           // Created, awaiting payment
                'payment_sent',      // Customer claims they sent payment
                'confirmed',         // You verified payment
                'processing',        // You're preparing the order
                'shipped',           // Order is on the way
                'delivered',         // Customer received it
                'cancelled'          // Order was cancelled
            ])->default('pending');
            // Customer information (they provide this via WhatsApp)
            $table->string('customer_name')->nullable();
            $table->string('customer_phone')->nullable();
            $table->text('delivery_address')->nullable();
            $table->string('city_state')->nullable();

            // Order totals
            $table->decimal('subtotal', 10, 2);
            $table->decimal('tax', 10, 2);
            $table->decimal('shipping', 10, 2);
            $table->decimal('total', 10, 2);
            $table->decimal('savings', 10, 2)->default(0);

            // Payment tracking
            $table->enum('payment_method', ['bank_transfer', 'cash_on_delivery', 'pending'])->default('pending');
            $table->timestamp('payment_confirmed_at')->nullable();
            $table->text('payment_notes')->nullable(); // For receipt details, reference numbers, etc.

            // The full WhatsApp message sent (for reference)
            $table->text('whatsapp_message')->nullable();
            //Order expires
            $table->timestamp('expired_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
