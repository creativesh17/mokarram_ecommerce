<?php

namespace Database\Seeders;

use App\Models\ProductImage;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        ProductImage::truncate();

        ProductImage::insert([
        	[
        		'product_id' => 1,
		        'image' => "uploads/product/1.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 2,
		        'image' => "uploads/product/2.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
			],
        	[
        		'product_id' => 3,
		        'image' => "uploads/product/3.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 4,
		        'image' => "uploads/product/4.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 5,
		        'image' => "uploads/product/5.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 6,
		        'image' => "uploads/product/6.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 7,
		        'image' => "uploads/product/7.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 8,
		        'image' => "uploads/product/11.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 8,
		        'image' => "uploads/product/11-a.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 8,
		        'image' => "uploads/product/12.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 8,
		        'image' => "uploads/product/12-a.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 9
        	[
        		'product_id' => 9,
		        'image' => "uploads/product/13.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 9,
		        'image' => "uploads/product/13-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 9,
		        'image' => "uploads/product/14.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 9,
		        'image' => "uploads/product/14-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 10
        	[
        		'product_id' => 10,
		        'image' => "uploads/product/15.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 10,
		        'image' => "uploads/product/15-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 10,
		        'image' => "uploads/product/16.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 10,
		        'image' => "uploads/product/16-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			// [
        	// 	'product_id' => 8,
		    //     'image' => "uploads/product/8.jpg",
		    //     'alt' => null,
		    //     'creator' => 1,
		    //     'slug' => null,
		    // ],
        	
        	// [
        	// 	'product_id' => 8,
		    //     'image' => "uploads/product/8.jpg",
		    //     'alt' => null,
		    //     'creator' => 1,
		    //     'slug' => null,
		    // ],
        	// [
        	// 	'product_id' => 8,
		    //     'image' => "uploads/product/8-a.jpg",
		    //     'alt' => null,
		    //     'creator' => 1,
		    //     'slug' => null,
		    // ],
        	// [
        	// 	'product_id' => 8,
		    //     'image' => "uploads/product/9.jpg",
		    //     'alt' => null,
		    //     'creator' => 1,
		    //     'slug' => null,
		    // ],
        	// [
        	// 	'product_id' => 8,
		    //     'image' => "uploads/product/9-a.jpg",
		    //     'alt' => null,
		    //     'creator' => 1,
		    //     'slug' => null,
		    // ],
        	// [
        	// 	'product_id' => 8,
		    //     'image' => "uploads/product/10.jpg",
		    //     'alt' => null,
		    //     'creator' => 1,
		    //     'slug' => null,
		    // ],
        	// [
        	// 	'product_id' => 8,
		    //     'image' => "uploads/product/10-a.jpg",
		    //     'alt' => null,
		    //     'creator' => 1,
		    //     'slug' => null,
		    // ],
        	
        ]);

        Schema::enableForeignKeyConstraints();
    }
}
