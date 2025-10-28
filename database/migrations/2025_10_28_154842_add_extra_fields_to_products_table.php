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
        Schema::table('products', function (Blueprint $table) {
                $table->string('sku')->unique()->nullable()->after('id');
                $table->decimal('old_price', 10, 2)->nullable()->after('price');
                $table->json('available_sizes')->nullable()->after('stock');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['sku', 'old_price', 'available_sizes']);
        });
    }
};
