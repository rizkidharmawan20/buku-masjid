<?php

namespace Database\Seeders;

use App\Models\BankAccount;
use App\Models\Book;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book = Book::first();
        $categoryIncome = Category::where('is_inc', 1)->first();
        $categoryOutcome = Category::where('is_inc', 0)->first();
        $bankAccount = BankAccount::first();

        Transaction::firstOrCreate(
            [
                'book_id' => $book->id,
                'category_id' => $categoryIncome->id,
                'bank_account_id' => $bankAccount->id,
                'date' => '2023-01-01',
                'amount' => 1000000,
                'description' => 'Donasi Awal Tahun',
                'in_out' => 1,
            ]
        );

        Transaction::firstOrCreate(
            [
                'book_id' => $book->id,
                'category_id' => $categoryOutcome->id,
                'bank_account_id' => $bankAccount->id,
                'date' => '2023-01-05',
                'amount' => 250000,
                'description' => 'Pembelian ATK',
                'in_out' => 0,
            ]
        );
    }
}
