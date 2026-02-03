<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Author;

class BookSeeder extends Seeder
{
    public function run()
    {
        $rowling = Author::where('email', 'jkrowling@example.com')->first();
        $martin  = Author::where('email', 'grrmartin@example.com')->first();

        Book::create([
            'author_id' => $rowling->id,
            'title' => 'Harry Potter and the Sorcerer\'s Stone',
            'isbn' => '9780747532699',
            'published_at' => '1997-06-26'
        ]);

        Book::create([
            'author_id' => $martin->id,
            'title' => 'A Game of Thrones',
            'isbn' => '9780553103540',
            'published_at' => '1996-08-06'
        ]);
    }
}
