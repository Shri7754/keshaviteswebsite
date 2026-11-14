<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile', 20);
            $table->string('email');
            $table->string('service');
            $table->text('description');
            $table->date('demo_date');
            $table->time('demo_time');
            $table->enum('status', ['pending', 'confirmed', 'completed', 'cancelled'])->default('pending');
            $table->timestamps();

            // Indexes for better search performance
            $table->index('email');
            $table->index('mobile');
            $table->index('service');
            $table->index('status');
            $table->index('demo_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('project_bookings');
    }
};
