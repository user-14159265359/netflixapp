<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeriesTable extends Migration
{
    
    public function up(): void
    {
        Schema::create('series', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->longText('description');
            $table->timestamps();
        });
    }

    
    public function down(): void
    {
        Schema::dropIfExists('series');
    }
}
