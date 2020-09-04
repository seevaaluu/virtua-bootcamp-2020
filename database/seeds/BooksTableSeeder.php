<?php

use Illuminate\Database\Seeder;
use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=1; $i < 1500; $i++) { 
            Book::create([
                "name" => $faker->company,
                "author" => $faker->name,
                "stock" => $faker->randomDigit              
            ]);
        }

    }
}
