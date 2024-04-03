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

        DB::table('discount_products')->insert([
            'product_id' => 11,
            'main_price' => 260.00,
            'discount_percent' => 10.00,
            'discount_amount' => 26.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 12,
            'main_price' => 450.00,
            'discount_percent' => 10.00,
            'discount_amount' => 45.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 13,
            'main_price' => 100.00,
            'discount_percent' => 10.00,
            'discount_amount' => 10.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 14,
            'main_price' => 68.00,
            'discount_percent' => 10.00,
            'discount_amount' => 6.80,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 15,
            'main_price' => 3150.00,
            'discount_percent' => 10.00,
            'discount_amount' => 315.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 16,
            'main_price' => 1200.00,
            'discount_percent' => 10.00,
            'discount_amount' => 120.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 18,
            'main_price' => 450.00,
            'discount_percent' => 10.00,
            'discount_amount' => 45.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 19,
            'main_price' => 100.00,
            'discount_percent' => 10.00,
            'discount_amount' => 10.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 21,
            'main_price' => 50.00,
            'discount_percent' => 10.00,
            'discount_amount' => 5.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 22,
            'main_price' => 213.00,
            'discount_percent' => 10.00,
            'discount_amount' => 21.30,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 23,
            'main_price' => 159.00,
            'discount_percent' => 10.00,
            'discount_amount' => 15.90,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 24,
            'main_price' => 210.00,
            'discount_percent' => 10.00,
            'discount_amount' => 21.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 25,
            'main_price' => 1650.00,
            'discount_percent' => 10.00,
            'discount_amount' => 165.00,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 26,
            'main_price' => 1695.00,
            'discount_percent' => 10.00,
            'discount_amount' => 169.50,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('discount_products')->insert([
            'product_id' => 27,
            'main_price' => 1136.00,
            'discount_percent' => 10.00,
            'discount_amount' => 113.60,
            'discount_last_date' => now()->addYears(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
