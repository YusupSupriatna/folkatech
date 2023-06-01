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
        Schema::create('master_product', function (Blueprint $table) {
            $table->id();
            $table->string("merek");
            $table->string("product_name");
            $table->integer("rating");
            $table->boolean("price");
            $table->string("origin");
            $table->string("species");
            $table->string("roast_lavel");
            $table->string("tasted");
            $table->string("processing");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('master_product');
    }
};
