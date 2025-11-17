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
        Schema::create('wagons', function (Blueprint $table) {
            $table->id();
            $table->timestamps();            
            $table->string('status');            
            $table->string('wagon_number');            
            $table->string('type');            
            $table->string('tank_revision');            
            $table->string('uf_revision');          
            $table->string('cleaning_status');          
            $table->integer('position_on_list');          
            $table->string('painting');
            $table->string('color_status');
            $table->string('location');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wagons');
    }
};
