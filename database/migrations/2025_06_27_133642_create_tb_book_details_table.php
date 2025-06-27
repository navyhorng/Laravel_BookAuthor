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
        Schema::create('tb_book_details', function (Blueprint $table) {
            $table->unsignedSmallInteger('author_id');
            $table->unsignedInteger('book_id');
            $table->timestamps();

            //primary key
            $table->primary(['author_id', 'book_id']);

            //foreign key
            $table->foreign('author_id')->references('author_id')->on('tb_authors')->onDelete('cascade');
            $table->foreign('book_id')->references('book_id')->on('tb_books')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_book_details');
    }
};
