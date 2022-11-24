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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('service'); // nouveau       
            $table->string('office'); // nouveau        
            $table->string('name'); // nouveau      
            $table->string('type'); // nouveau      
            $table->string('sn'); // nouveau        
            $table->string('model'); // nouveau     
            $table->string('cpu'); // nouveau       
            $table->string('threads'); // nouveau       
            $table->string('ram'); // nouveau       
            $table->string('ram_type'); // nouveau     
            $table->string('storage'); // nouveau       
            $table->string('storage_type'); // nouveau      
            $table->string('os'); // nouveau        
            $table->string('os_version'); // n      ouveau
            $table->string('os_sn'); // nouveau     
            $table->string('anti_virus'); // nouveau     
            $table->string('av_activation'); // nouveau   
            $table->string('av_sn'); // nouveau           
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
        Schema::dropIfExists('devices');
    }
};
