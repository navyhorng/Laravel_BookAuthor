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
        Schema::create('tb_authors', function (Blueprint $table) {
            $table->smallIncrements('author_id');
            $table->string('author_name',100);
            $table->string('gender', 10)->nullable();
            $table->string('email', 150)->unique();
            $table->unsignedSmallInteger('total_book')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_authors');
    }
};
