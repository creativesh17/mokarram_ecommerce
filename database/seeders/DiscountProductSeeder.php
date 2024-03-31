<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        DB::table('discount_products')->insert([
            'product_id' => 1,
            'main_price' => 8350.00,
            'discount_percent' => 10.00,
            'discount_amount' => 835.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 2,
            'main_price' => 7032.00,
            'discount_percent' => 10.00,
            'discount_amount' => 703.20,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 3,
            'main_price' => 12942.00,
            'discount_percent' => 10.00,
            'discount_amount' => 1294.20,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 4,
            'main_price' => 2100.00,
            'discount_percent' => 10.00,
            'discount_amount' => 210.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 5,
            'main_price' => 3702.00,
            'discount_percent' => 10.00,
            'discount_amount' => 370.20,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        DB::table('discount_products')->insert([
            'product_id' => 6,
            'main_price' => 6350.00,
            'discount_percent' => 10.00,
            'discount_amount' => 635.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 7,
            'main_price' => 850.00,
            'discount_percent' => 10.00,
            'discount_amount' => 85.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('discount_products')->insert([
            'product_id' => 7,
            'main_price' => 850.00,
            'discount_percent' => 10.00,
            'discount_amount' => 85.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 8,
            'main_price' => 1260.00,
            'discount_percent' => 10.00,
            'discount_amount' => 126.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 9,
            'main_price' => 332.00,
            'discount_percent' => 10.00,
            'discount_amount' => 33.20,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 10,
            'main_price' => 390.00,
            'discount_percent' => 10.00,
            'discount_amount' => 39.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        
        // DB::table('discount_products')->insert([
        //     'product_id' => 8- ator,
        //     'main_price' => 159.00,
        //     'discount_percent' => 10.00,
        //     'discount_amount' => 15.90,
        //     'discount_last_date' => now()->addYears(10),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);
        

    }
}
