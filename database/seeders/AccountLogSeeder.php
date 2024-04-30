<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AccountLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('account_logs')->truncate();

        DB::table('account_logs')->insert([
            'account_category_id' => 1,
            'amount' => 13844,
            'amount_in_text' => 'thirteen thousand eight hundred and fourty four',
            'date' => Carbon::parse('2024-04-14')->format('Y-m-d'),
            'type' => 'income',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // 2
        DB::table('account_logs')->insert([
            'account_category_id' => 1,
            'amount' => 13537.80,
            'amount_in_text' => 'thirteen thousand five hundred thirty-seven and eight tenths',
            'date' => Carbon::parse('2024-04-15')->format('Y-m-d'),
            'type' => 'income',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // 3
        DB::table('account_logs')->insert([
            'account_category_id' => 1,
            'amount' => 9046.80,
            'amount_in_text' => 'nine thousand forty-six and eight tenths',
            'date' => Carbon::parse('2024-04-16')->format('Y-m-d'),
            'type' => 'income',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        // 4
        DB::table('account_logs')->insert([
            'account_category_id' => 1,
            'amount' => 1899,
            'amount_in_text' => 'one thousand eight hundred ninety-nine',
            'date' => Carbon::parse('2024-04-17')->format('Y-m-d'),
            'type' => 'expense',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 5
        DB::table('account_logs')->insert([
            'account_category_id' => 1,
            'amount' => 649.80,
            'amount_in_text' => 'six hundred forty-nine and eight tenths',
            'date' => Carbon::parse('2024-04-18')->format('Y-m-d'),
            'type' => 'expense',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Schema::enableForeignKeyConstraints();
        
    }
}
