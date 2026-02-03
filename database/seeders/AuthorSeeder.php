<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run()
    {
        Author::create([
            'name' => 'J.K. Rowling',
            'email' => 'jkrowling@example.com',
            'birthdate' => '1965-07-31'
        ]);

        Author::create([
            'name' => 'George R.R. Martin',
            'email' => 'grrmartin@example.com',
            'birthdate' => '1948-09-20'
        ]);
    }
}
