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
        

        DB::table('tb_authors')->insert([
           [
                'author_name' => 'Jane Austen',
                'gender' => 'Female',
                'email' => 'jane.austen@example.com',
                'total_book' => 2,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_name' => 'Mark Twain',
                'gender' => 'Male',
                'email' => 'mark.twain@example.com',
                'total_book' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'author_name' => 'Ruby Jane',
                'gender' => 'Female',
                'email' => 'ruby.jane@example.com',
                'total_book' => 3,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'author_name' => 'Prak Janny',
                'gender' => 'Female',
                'email' => 'prak.janny@example.com',
                'total_book' => 5,
                'is_active' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        DB::table('tb_books')->insert([
            [
                'book_title' => 'Pride and Prejudice',
                'type' => 'Novel',
                'description' => 'A romantic novel by Jane Austen.',
                'cover_image' => 'book/book1.jpg',
                'is_active' => true,
                'author_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'book_title' => 'Sense and Sensibility',
                'type' => 'Novel',
                'description' => 'Another novel by Jane Austen.',
                'cover_image' => 'book/book2.jpg',
                'is_active' => true,
                'author_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'book_title' => 'Adventures of Huckleberry Finn',
                'type' => 'Novel',
                'description' => 'A novel by Mark Twain.',
                'cover_image' => 'book/book3.jpg',
                'is_active' => true,
                'author_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'book_title' => 'The Adventures of Tom Sawyer',
                'type' => 'Novel',
                'description' => 'Another novel by Mark Twain.',
                'cover_image' => 'book/book4.jpg',
                'is_active' => true,
                'author_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'book_title' => 'The Chrononauts Paradox',
                'type' => 'Science Fiction',
                'description' => 'a sci-fi novel about a physicist ',
                'cover_image' => 'book/book5.jpg',
                'is_active' => true,
                'author_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'book_title' => 'The Whispering Labyrinth',
                'type' => 'Fantasy',
                'description' => 'A cartographer navigates a shifting, sentient forest to uncover a forgotten kingdoms magical decay.',
                'cover_image' => 'book/book6.jpg',
                'is_active' => true,
                'author_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'book_title' => 'Echoes in the Attic',
                'type' => 'Psychological Thriller',
                'description' => 'Hidden journals in an old house slowly reveal a sinister history to its new owner.',
                'cover_image' => 'book/book7.jpg',
                'is_active' => true,
                'author_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'book_title' => 'The Algorithmic Muse',
                'type' => 'Contemporary Fiction ',
                'description' => 'A human author collaborates with an unpredictable AI to explore creativity in a future where AI writes novels.',
                'cover_image' => 'book/book8.jpg',
                'is_active' => true,
                'author_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
        DB::table('tb_book_details')->insert([
            ['author_id' => 1, 'book_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['author_id' => 2, 'book_id' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['author_id' => 1, 'book_id' => 2, 'created_at' => now(), 'updated_at' => now()],
            ['author_id' => 3, 'book_id' => 3, 'created_at' => now(), 'updated_at' => now()],
            ['author_id' => 1, 'book_id' => 4, 'created_at' => now(), 'updated_at' => now()],
            ['author_id' => 4, 'book_id' => 5, 'created_at' => now(), 'updated_at' => now()],
            ['author_id' => 1, 'book_id' => 3, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
