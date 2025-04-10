<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Seed users
        DB::table('users')->insert([
            ['name' => 'Alice', 'email' => 'alice@example.com', 'password' => Hash::make('password')],
            ['name' => 'Bob', 'email' => 'bob@example.com', 'password' => Hash::make('password')],
            ['name' => 'Charlie', 'email' => 'charlie@example.com', 'password' => Hash::make('password')],
            ['name' => 'Diana', 'email' => 'diana@example.com', 'password' => Hash::make('password')],
            ['name' => 'Eve', 'email' => 'eve@example.com', 'password' => Hash::make('password')],
        ]);

        // Seed genres
        DB::table('genres')->insert([
            ['name' => 'Science Fiction'],
            ['name' => 'Fantasy'],
            ['name' => 'Mystery'],
            ['name' => 'Romance'],
            ['name' => 'Horror'],
        ]);

        // Seed books
        DB::table('books')->insert([
            ['title' => 'Dune', 'publisher' => 'Chilton Books'],
            ['title' => 'The Hobbit', 'publisher' => 'George Allen & Unwin'],
            ['title' => 'The Da Vinci Code', 'publisher' => 'Doubleday'],
            ['title' => 'Pride and Prejudice', 'publisher' => 'T. Egerton'],
            ['title' => 'Dracula', 'publisher' => 'Archibald Constable and Company'],
        ]);

        // Seed books_genres (pivot table)
        DB::table('books_genres')->insert([
            ['book_id' => 1, 'genre_id' => 1], // Dune - Science Fiction
            ['book_id' => 2, 'genre_id' => 2], // The Hobbit - Fantasy
            ['book_id' => 3, 'genre_id' => 3], // The Da Vinci Code - Mystery
            ['book_id' => 4, 'genre_id' => 4], // Pride and Prejudice - Romance
            ['book_id' => 5, 'genre_id' => 5], // Dracula - Horror
        ]);

        // Seed reviews
        DB::table('reviews')->insert([
            ['user_id' => 1, 'book_id' => 1, 'score' => 5],
            ['user_id' => 2, 'book_id' => 2, 'score' => 4],
            ['user_id' => 3, 'book_id' => 3, 'score' => 3],
            ['user_id' => 4, 'book_id' => 4, 'score' => 5],
            ['user_id' => 5, 'book_id' => 5, 'score' => 4],
        ]);
    }
}
