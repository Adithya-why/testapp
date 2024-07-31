<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//migration to create the product table

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //create the table with the given arguments
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
