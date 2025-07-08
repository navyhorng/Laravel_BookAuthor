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
        Schema::create('tb_books', function (Blueprint $table) {
            $table->increments('book_id');
            $table->string('cover_image')->nullable();
            $table->string('book_title',255);
            $table->string('type',100);
            $table->text('description')->nullable();
            $table->boolean('is_active')->default(true)->index();
            // $table->unsignedSmallInteger('author_id');
            // $table->foreign('author_id')->references('author_id')->on('tb_authors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_books');
    }
};
