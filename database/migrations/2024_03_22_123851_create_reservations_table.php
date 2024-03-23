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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('tr_reference');
            $table->string('customer_fullname');
            $table->string('customer_email');
            $table->string('customer_phone');
            $table->integer('nb_tickets');
            $table->foreignId('ticket_id')->constrained('event_tickets');
            $table->foreignId('total_amount');
            $table->string('invoice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
