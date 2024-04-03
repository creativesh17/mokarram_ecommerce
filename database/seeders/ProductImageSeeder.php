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
        	[
        		'product_id' => 11,
		        'image' => "uploads/product/17.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 11,
		        'image' => "uploads/product/17-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 12
        	[
        		'product_id' => 12,
		        'image' => "uploads/product/18.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 12,
		        'image' => "uploads/product/18-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 13
        	[
        		'product_id' =>13,
		        'image' => "uploads/product/19.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' =>13,
		        'image' => "uploads/product/19-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 14
        	[
        		'product_id' =>14,
		        'image' => "uploads/product/20.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' =>14,
		        'image' => "uploads/product/20-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 15
        	[
        		'product_id' =>15,
		        'image' => "uploads/product/21.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 16
        	[
        		'product_id' => 16,
		        'image' => "uploads/product/22.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 16,
		        'image' => "uploads/product/22-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 17
        	[
        		'product_id' => 17,
		        'image' => "uploads/product/23.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 18
        	[
        		'product_id' => 18,
		        'image' => "uploads/product/24.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 19
        	[
        		'product_id' => 19,
		        'image' => "uploads/product/25.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],

			// 20
        	[
        		'product_id' => 20,
		        'image' => "uploads/product/26.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 20,
		        'image' => "uploads/product/26-a.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 20,
		        'image' => "uploads/product/27.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 20,
		        'image' => "uploads/product/27-a.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 21
			[
        		'product_id' => 21,
		        'image' => "uploads/product/28.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 21,
		        'image' => "uploads/product/28-a.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 22
			[
        		'product_id' => 22,
		        'image' => "uploads/product/29.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 22,
		        'image' => "uploads/product/29-a.jpg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 23
			[
        		'product_id' => 8,
		        'image' => "uploads/product/8.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],

        	[
        		'product_id' => 8,
		        'image' => "uploads/product/8-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 8,
		        'image' => "uploads/product/9.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 8,
		        'image' => "uploads/product/9-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 8,
		        'image' => "uploads/product/10.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 8,
		        'image' => "uploads/product/10-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 24
			[
        		'product_id' => 24,
		        'image' => "uploads/product/30.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 24,
		        'image' => "uploads/product/30-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 25
        	[
        		'product_id' => 25,
		        'image' => "uploads/product/31.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 26
        	[
        		'product_id' => 26,
		        'image' => "uploads/product/32.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 26,
		        'image' => "uploads/product/32-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 26,
		        'image' => "uploads/product/33.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 26,
		        'image' => "uploads/product/33-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
			// 27
        	[
        		'product_id' => 27,
		        'image' => "uploads/product/34.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 27,
		        'image' => "uploads/product/34-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 27,
		        'image' => "uploads/product/35.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],
        	[
        		'product_id' => 27,
		        'image' => "uploads/product/35-a.jpeg",
		        'alt' => null,
		        'creator' => 1,
		        'slug' => null,
		    ],


        ]);

        Schema::enableForeignKeyConstraints();
    }
}
