<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('tb_books', function (Blueprint $table) {
            $table->unsignedSmallInteger('author_id')->after('is_active');
            $table->foreign('author_id')->references('author_id')->on('tb_authors')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('tb_books', function (Blueprint $table) {
            $table->dropForeign(['author_id']);
            $table->dropColumn('author_id');
        });
    }
};
