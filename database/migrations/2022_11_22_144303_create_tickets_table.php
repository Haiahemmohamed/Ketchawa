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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->date('open_date'); // nouveau
            $table->string('title'); // nouveau
            $table->string('requester'); // nouveau
            $table->string('department'); // nouveau
            $table->string('office'); // nouveau
            $table->string('job'); // nouveau
            $table->string('ticket_category'); // nouveau
            $table->string('priority'); // nouveau
            $table->string('ticket_status'); // nouveau
            $table->string('description'); // nouveau
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tickets');
    }
};
