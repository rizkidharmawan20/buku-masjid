<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(BookSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(BankAccountSeeder::class);
        $this->call(TransactionSeeder::class);
    }
}
