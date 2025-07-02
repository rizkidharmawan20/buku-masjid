<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = Book::first();

        Category::firstOrCreate(
            [
                'book_id' => $book->id,
                'name' => 'Pemasukan Rutin',
                'description' => 'Pemasukan rutin bulanan',
                'is_inc' => 1,
            ]
        );

        Category::firstOrCreate(
            [
                'book_id' => $book->id,
                'name' => 'Pengeluaran Rutin',
                'description' => 'Pengeluaran rutin bulanan',
                'is_inc' => 0,
            ]
        );
    }
}
