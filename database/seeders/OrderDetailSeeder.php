<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('order_details')->truncate();

        DB::table('order_details')->insert([
            'order_id' => 1,
            'user_id' => 129,
            'product_id' => 1,
            'product_price' => 7515,
            'qty' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('order_details')->insert([
            'order_id' => 1,
            'user_id' => 129,
            'product_id' => 2,
            'product_price' => 6329,
            'qty' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('order_details')->insert([
            'order_id' => 2,
            'user_id' => 126,
            'product_id' => 3,
            'product_price' => 11647.80,
            'qty' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('order_details')->insert([
            'order_id' => 2,
            'user_id' => 126,
            'product_id' => 4,
            'product_price' => 1890,
            'qty' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('order_details')->insert([
            'order_id' => 3,
            'user_id' => 129,
            'product_id' => 5,
            'product_price' => 3331.80,
            'qty' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('order_details')->insert([
            'order_id' => 3,
            'user_id' => 129,
            'product_id' => 6,
            'product_price' => 5715,
            'qty' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('order_details')->insert([
            'order_id' => 4,
            'user_id' => 126,
            'product_id' => 7,
            'product_price' => 765,
            'qty' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('order_details')->insert([
            'order_id' => 4,
            'user_id' => 126,
            'product_id' => 8,
            'product_price' => 1134,
            'qty' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('order_details')->insert([
            'order_id' => 5,
            'user_id' => 129,
            'product_id' => 9,
            'product_price' => 298.80,
            'qty' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('order_details')->insert([
            'order_id' => 5,
            'user_id' => 129,
            'product_id' => 10,
            'product_price' => 351,
            'qty' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        Schema::enableForeignKeyConstraints();
        
    }


    
}
