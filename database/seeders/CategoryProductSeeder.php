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







        
        // DB::table('category_product')->insert([
        //     'category_id' => 1,
        //     'product_id' => 6,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);


    }
}
