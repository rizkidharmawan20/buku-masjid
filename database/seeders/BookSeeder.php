<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::firstOrCreate(
            ['name' => 'Buku Kas Umum'],
            [
                'description' => 'Buku kas untuk mencatat transaksi umum masjid.',
                'creator_id' => 1,
                'status_id' => Book::STATUS_ACTIVE,
                'report_visibility_code' => Book::REPORT_VISIBILITY_PUBLIC,
                'report_periode_code' => Book::REPORT_PERIODE_IN_MONTHS,
                'start_week_day_code' => 1,
            ]
        );
    }
}
