<?php

namespace Database\Seeders;

use App\Models\BankAccount;
use Illuminate\Database\Seeder;

class BankAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BankAccount::firstOrCreate(
            ['name' => 'Kas Tunai'],
            [
                'description' => 'Kas tunai masjid',
                'is_active' => 1,
            ]
        );
    }
}
