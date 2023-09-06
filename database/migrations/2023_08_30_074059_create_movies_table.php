<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Laravel\SerializableClosure\UnsignedSerializableClosure;

return new class extends Migration {
    
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->longText('description');
           
          
            $table->unsignedbigInteger('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->text('file');
            $table->text('thumbnail');
            $table->float('rating');
          
         
            $table->unsignedbigInteger('serie_id')->unsigned();
            $table->foreign('serie_id')->references('id')->on('series')->onDelete('cascade');
            $table->dateTime('date');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};