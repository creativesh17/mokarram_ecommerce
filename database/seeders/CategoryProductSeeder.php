<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CategoryProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        Schema::disableForeignKeyConstraints();
        DB::table('category_product')->truncate();

        // p-1
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 2,
            'product_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-2
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 2,
            'product_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-3
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 2,
            'product_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-4
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 2,
            'product_id' => 4,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-5
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 2,
            'product_id' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-6
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 2,
            'product_id' => 6,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-7
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 2,
            'product_id' => 7,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-8
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 3,
            'product_id' => 8,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-9
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 3,
            'product_id' => 9,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-10
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 3,
            'product_id' => 10,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-11
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 4,
            'product_id' => 11,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-12
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 4,
            'product_id' => 12,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-13
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 6,
            'product_id' => 13,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-14
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 6,
            'product_id' => 14,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-15
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 5,
            'product_id' => 15,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-16
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 5,
            'product_id' => 16,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-17
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 5,
            'product_id' => 17,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-18
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 7,
            'product_id' => 18,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-19
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('category_product')->insert([
            'category_id' => 8,
            'product_id' => 19,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        // p-20
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 8,
            'product_id' => 20,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-21
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 21,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 9,
            'product_id' => 21,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-22
        DB::table('category_product')->insert([
            'category_id' => 1,
            'product_id' => 22,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 9,
            'product_id' => 22,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
        // p-23
        DB::table('category_product')->insert([
            'category_id' => 6,
            'product_id' => 23,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-24
        DB::table('category_product')->insert([
            'category_id' => 6,
            'product_id' => 24,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-25
        DB::table('category_product')->insert([
            'category_id' => 10,
            'product_id' => 25,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 11,
            'product_id' => 25,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-26
        DB::table('category_product')->insert([
            'category_id' => 10,
            'product_id' => 26,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 12,
            'product_id' => 26,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // p-27
        DB::table('category_product')->insert([
            'category_id' => 10,
            'product_id' => 27,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('category_product')->insert([
            'category_id' => 12,
            'product_id' => 27,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


    }
}
