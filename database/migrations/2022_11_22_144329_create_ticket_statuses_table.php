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
        Schema::create('ticket_statuses', function (Blueprint $table) {
            $table->id();
            $table->date('open_date'); // nouveau
            $table->date('title'); // nouveau
            $table->string('username'); // nouveau
            $table->string('department'); // nouveau
            $table->string('job'); // nouveau
            $table->string('problem_type'); // nouveau
            $table->string('problem_catygory'); // nouveau
            $table->string('priority'); // nouveau
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
        Schema::dropIfExists('ticket_statuses');
    }
};
