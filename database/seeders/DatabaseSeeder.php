<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('tb_books')->insert([
            [
                'book_title' => 'Laravel for Beginners',
                'type' => 'Tech',
                'description' => 'Introductory book on Laravel framework.',
                'is_active' => true,
                'cover_image' => 'books/Book1.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_title' => 'Advanced PHP',
                'type' => 'Tech',
                'description' => 'Deep dive into PHP best practices.',
                'is_active' => true,
                'cover_image' => 'books/Book2.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'book_title' => 'Cooking 101',
                'type' => 'Cooking',
                'description' => 'Basic cooking recipes.',
                'is_active' => false,
                'cover_image' =>'books/book3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);


        DB::table('tb_authors')->insert([
            ['author_name' => 'John Doe', 'total_book' => 3, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['author_name' => 'Jane Smith', 'total_book' => 1, 'is_active' => true, 'created_at' => now(), 'updated_at' => now()],
            ['author_name' => 'Alice Johnson', 'total_book' => 2, 'is_active' => false, 'created_at' => now(), 'updated_at' => now()],
        ]);

        DB::table('tb_book_details')->insert([
            ['author_id' => 1, 'book_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['author_id' => 2, 'book_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['author_id' => 1, 'book_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['author_id' => 3, 'book_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
