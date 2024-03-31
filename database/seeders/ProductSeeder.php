<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Product::truncate();

        Product::insert([
            
            // lubnan - richman
            // 1
        	[
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "Mens Cream Colour Luxury Panjabi set",
		        'product_url' => Str::slug('Mens Cream Colour Luxury Panjabi set'),
		        'brand_id' => 10,
                'selected_categories' => "[1, 2]",

                'short_description' => "<ul><li>Indian Cotton</li><li>Regular Fit</li><li>Cream Colour</li></ul><p>PANJABI made with high-quality fabrics and exquisite embellishments. It is usually priced at a premium and is designed for customers who are looking for something unique and exclusive.</p>",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium Panjabi. Made from 100% soft and breathable cotton, it is perfect for any occasion. The Panjabi features gorgeous designs, adding a touch of elegance to the simple yet sophisticated design. The beige color is neutral and versatile, making it easy to style. With a comfortable regular fit, it is both practical and stylish. Available in sizes 38 to 46, you’re sure to find the perfect size for you.</p>",

                'specification' => "",
                
                'image' => null,
                'cost' => null,
                'sales_price' => 8350.00,
                'call_for_price' => null,
                
                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => "Mens Cream Colour Luxury Panjabi set",
                'search_keywords' => "Mens Cream Colour Luxury Panjabi set",
                'meta_description' => "Mens Cream Colour Luxury Panjabi set",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("Mens Cream Colour Luxury Panjabi set"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 2
        	[
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "Men’s Maroon Colour Luxury Panjabi set",
		        'product_url' => Str::slug('Men’s Maroon Colour Luxury Panjabi set'),
		        'brand_id' => 11,
                'selected_categories' => "[1, 2]",

                'short_description' => "<ul><li>Indian Cotton</li><li>Regular Fit</li><li>Cream Colour</li></ul><p>PANJABI made with high-quality fabrics and exquisite embellishments. It is usually priced at a premium and is designed for customers who are looking for something unique and exclusive.</p>",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium Panjabi. Made from 100% soft and breathable cotton, it is perfect for any occasion. The Panjabi features gorgeous designs, adding a touch of elegance to the simple yet sophisticated design. The beige color is neutral and versatile, making it easy to style. With a comfortable regular fit, it is both practical and stylish. Available in sizes 38 to 46, you’re sure to find the perfect size for you.</p>",

                'specification' => "",
                
                'image' => null,
                'cost' => null,
                'sales_price' => 7032.00,
                'call_for_price' => null,
                
                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => "Men’s Maroon Colour Luxury Panjabi set",
                'search_keywords' => "Men’s Maroon Colour Luxury Panjabi set",
                'meta_description' => "Men’s Maroon Colour Luxury Panjabi set",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("Men’s Maroon Colour Luxury Panjabi set"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 3
        	[
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "Luxury Dark Olive Colour Panjabi",
		        'product_url' => Str::slug('Luxury Dark Olive Colour Panjabi'),
		        'brand_id' => 9,
                'selected_categories' => "[1, 2]",

                'short_description' => "<ul><li>Indian Cotton</li><li>Regular Fit</li><li>Cream Colour</li></ul><p>PANJABI made with high-quality fabrics and exquisite embellishments. It is usually priced at a premium and is designed for customers who are looking for something unique and exclusive.</p>",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium Panjabi. Made from 100% soft and breathable cotton, it is perfect for any occasion. The Panjabi features gorgeous designs, adding a touch of elegance to the simple yet sophisticated design. The beige color is neutral and versatile, making it easy to style. With a comfortable regular fit, it is both practical and stylish. Available in sizes 38 to 46, you’re sure to find the perfect size for you.</p>",
                
                'specification' => "",
                
                'image' => null,
                'cost' => null,
                'sales_price' => 12942.00,
                'call_for_price' => null,
                
                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => "Luxury Dark Olive Colour Panjabi",
                'search_keywords' => "Luxury Dark Olive Colour Panjabi",
                'meta_description' => "Luxury Dark Olive Colour Panjabi",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("Luxury Dark Olive Colour Panjabi"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 4
        	[
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "Slim Fit Blue Color Casual Panjabi",
		        'product_url' => Str::slug('Slim Fit Blue Color Casual Panjabi'),
		        'brand_id' => 8,
                'selected_categories' => "[1, 2]",

                'short_description' => "<ul><li>Chinese Cotton</li><li>Regular Fit</li><li>Cream Colour</li></ul><p>PANJABI made with high-quality fabrics and exquisite embellishments. It is usually priced at a premium and is designed for customers who are looking for something unique and exclusive.</p>",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium Panjabi. Made from 100% soft and breathable cotton, it is perfect for any occasion. The Panjabi features gorgeous designs, adding a touch of elegance to the simple yet sophisticated design. The beige color is neutral and versatile, making it easy to style. With a comfortable regular fit, it is both practical and stylish. Available in sizes 38 to 46, you’re sure to find the perfect size for you.</p>",
                
                'specification' => "",
                
                'image' => null,
                'cost' => null,
                'sales_price' => 2100.00,
                'call_for_price' => null,
                
                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => "Slim Fit Blue Color Casual Panjabi",
                'search_keywords' => "Slim Fit Blue Color Casual Panjabi",
                'meta_description' => "Slim Fit Blue Color Casual Panjabi",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("Slim Fit Blue Color Casual Panjabi"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 5
        	[
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "Regular Fit Turquoise Color Panjabi",
		        'product_url' => Str::slug('Regular Fit Turquoise Color Panjabi'),
		        'brand_id' => 8,
                'selected_categories' => "[1, 2]",

                'short_description' => "<ul><li>Chinese Cotton</li><li>Regular Fit</li><li>Cream Colour</li></ul><p>PANJABI made with high-quality fabrics and exquisite embellishments. It is usually priced at a premium and is designed for customers who are looking for something unique and exclusive.</p>",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium Panjabi. Made from 100% soft and breathable cotton, it is perfect for any occasion. The Panjabi features gorgeous designs, adding a touch of elegance to the simple yet sophisticated design. The beige color is neutral and versatile, making it easy to style. With a comfortable regular fit, it is both practical and stylish. Available in sizes 38 to 46, you’re sure to find the perfect size for you.</p>",
                
                'specification' => "",
                
                'image' => null,
                'cost' => null,
                'sales_price' => 3702.00,
                'call_for_price' => null,
                
                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => "Regular Fit Turquoise Color Panjabi",
                'search_keywords' => "Regular Fit Turquoise Color Panjabi",
                'meta_description' => "Regular Fit Turquoise Color Panjabi",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("Regular Fit Turquoise Color Panjabi"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],


            // 6
        	[
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "Mens Blue Color Regular Fit Panjabi Set",
		        'product_url' => Str::slug('Mens Blue Color Regular Fit Panjabi Set'),
		        'brand_id' => 7,
                'selected_categories' => "[1, 2]",

                'short_description' => "<ul><li>Chinese Cotton</li><li>Regular Fit</li><li>Cream Colour</li></ul><p>PANJABI made with high-quality fabrics and exquisite embellishments. It is usually priced at a premium and is designed for customers who are looking for something unique and exclusive.</p>",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium Panjabi. Made from 100% soft and breathable cotton, it is perfect for any occasion. The Panjabi features gorgeous designs, adding a touch of elegance to the simple yet sophisticated design. The beige color is neutral and versatile, making it easy to style. With a comfortable regular fit, it is both practical and stylish. Available in sizes 38 to 46, you’re sure to find the perfect size for you.</p>",
                
                'specification' => "",
                
                'image' => null,
                'cost' => null,
                'sales_price' => 6350.00,
                'call_for_price' => null,
                
                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => "Mens Blue Color Regular Fit Panjabi Set",
                'search_keywords' => "Mens Blue Color Regular Fit Panjabi Set",
                'meta_description' => "Mens Blue Color Regular Fit Panjabi Set",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("Mens Blue Color Regular Fit Panjabi Set"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 7
        	[
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "Samsung Fabric Punjabi ( P-331D )",
		        'product_url' => Str::slug('Samsung Fabric Punjabi ( P-331D )'),
		        'brand_id' => 7,
                'selected_categories' => "[1, 2]",

                'short_description' => "<ul><li>Chinese Cotton</li><li>Regular Fit</li><li>Cream Colour</li></ul><p>PANJABI made with high-quality fabrics and exquisite embellishments. It is usually priced at a premium and is designed for customers who are looking for something unique and exclusive.</p>",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium Panjabi. Made from 100% soft and breathable cotton, it is perfect for any occasion. The Panjabi features gorgeous designs, adding a touch of elegance to the simple yet sophisticated design. The beige color is neutral and versatile, making it easy to style. With a comfortable regular fit, it is both practical and stylish. Available in sizes 38 to 46, you’re sure to find the perfect size for you.</p>",
                
                'specification' => "",
                
                'image' => null,
                'cost' => null,
                'sales_price' => 850.00,
                'call_for_price' => null,
                
                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => "Samsung Fabric Punjabi ( P-331D )",
                'search_keywords' => "Samsung Fabric Punjabi ( P-331D )",
                'meta_description' => "Samsung Fabric Punjabi ( P-331D )",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("Samsung Fabric Punjabi ( P-331D )"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 8
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "Premium Slim-Fit Pajama",
		        'product_url' => Str::slug('Premium Slim-Fit Pajama'),
		        'brand_id' => 2,
                'selected_categories' => "[1, 3]",
                'short_description' => "<ul><li><p>Material: 98% Cotton 2% Spandex<br>FIT: Slim-Fit</p></li></ul>",
                'description' => "",
                'specification' => "",
                
                'image' => null,
                'cost' => null,
                'sales_price' => 1260.00,
                'call_for_price' => null,
                
                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => "Premium Slim-Fit Pajama",
                'search_keywords' => "Premium Slim-Fit Pajama",
                'meta_description' => "Premium Slim-Fit Pajama",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("Premium Slim-Fit Pajama"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 9
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "স্টাইলিশ সুতি ন্যারো ফিট স্টিচ পাজামা",
		        'product_url' => Str::slug('স্টাইলিশ সুতি ন্যারো ফিট স্টিচ পাজামা'),
		        'brand_id' => 3,
                'selected_categories' => "[1, 3]",
                'short_description' => "<ul><li><p>Material: 98% Cotton 2% Spandex<br>FIT: Slim-Fit</p></li></ul>",
                'description' => "",
                'specification' => "",
                
                'image' => null,
                'cost' => null,
                'sales_price' => 332.00,
                'call_for_price' => null,
                
                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => "স্টাইলিশ সুতি ন্যারো ফিট স্টিচ পাজামা",
                'search_keywords' => "স্টাইলিশ সুতি ন্যারো ফিট স্টিচ পাজামা",
                'meta_description' => "স্টাইলিশ সুতি ন্যারো ফিট স্টিচ পাজামা",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("স্টাইলিশ সুতি ন্যারো ফিট স্টিচ পাজামা"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 10
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "সাদা রঙের সেমি ন্যারো স্ট্রেচ পাজামা",
		        'product_url' => Str::slug('সাদা রঙের সেমি ন্যারো স্ট্রেচ পাজামা'),
		        'brand_id' => 4,
                'selected_categories' => "[1, 3]",
                'short_description' => "<ul><li><p>Material: 98% Cotton 2% Spandex<br>FIT: Slim-Fit</p></li></ul>",
                'description' => "",
                'specification' => "",
                
                'image' => null,
                'cost' => null,
                'sales_price' => 390.00,
                'call_for_price' => null,
                
                'is_tba' => 0,
                'is_pre_order' => 0,
                'is_in_stock' => 1,
                'low_stock' => 10,
                'stock' => 80,
                'width' => null,
                'height' => null,
                'depth' => null,
                'weight' => null,
                'page_title' => "সাদা রঙের সেমি ন্যারো স্ট্রেচ পাজামা",
                'search_keywords' => "সাদা রঙের সেমি ন্যারো স্ট্রেচ পাজামা",
                'meta_description' => "সাদা রঙের সেমি ন্যারো স্ট্রেচ পাজামা",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("সাদা রঙের সেমি ন্যারো স্ট্রেচ পাজামা"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

















            // 8888888888888
        	// [
        	// 	'sku' => 'A584786',
		    //     'is_top_product' => 1,
		    //     'view_count' => 4,
		    //     'product_name' => "পুরুষদের জন্য 6 মাসের জন্য 6 পিস 6 টি ভিন্ন মিনি কম্বো আতর পারফিউম ননঅ্যালকোহলযুক্ত 3ml",
		    //     'product_url' => Str::slug('পুরুষদের জন্য 6 মাসের জন্য 6 পিস 6 টি ভিন্ন মিনি কম্বো আতর পারফিউম ননঅ্যালকোহলযুক্ত 3ml'),
		    //     'brand_id' => 4,
            //     'selected_categories' => "[6]",

            //     'short_description' => "<ul><li>Best Ator</li></ul>]",

            //     'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium Ator. you’re sure to find the perfect ator for you.</p>",
                
            //     'specification' => "",
                
            //     'image' => null,
            //     'cost' => null,
            //     'sales_price' => 159.00,
            //     'call_for_price' => null,
                
            //     'is_tba' => 0,
            //     'is_pre_order' => 0,
            //     'is_in_stock' => 1,
            //     'low_stock' => 10,
            //     'stock' => 80,
            //     'width' => null,
            //     'height' => null,
            //     'depth' => null,
            //     'weight' => null,
            //     'page_title' => "পুরুষদের জন্য 6 মাসের জন্য 6 পিস 6 টি ভিন্ন মিনি কম্বো আতর পারফিউম ননঅ্যালকোহলযুক্ত 3ml",
            //     'search_keywords' => "পুরুষদের জন্য 6 মাসের জন্য 6 পিস 6 টি ভিন্ন মিনি কম্বো আতর পারফিউম ননঅ্যালকোহলযুক্ত 3ml",
            //     'meta_description' => "পুরুষদের জন্য 6 মাসের জন্য 6 পিস 6 টি ভিন্ন মিনি কম্বো আতর পারফিউম ননঅ্যালকোহলযুক্ত 3ml",
            //     'schema_tag' => null,
            //     'video_url' => null,
            //     'creator' => null,
            //     'slug' => Str::slug("পুরুষদের জন্য 6 মাসের জন্য 6 পিস 6 টি ভিন্ন মিনি কম্বো আতর পারফিউম ননঅ্যালকোহলযুক্ত 3ml"),
            //     'status' => 1,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now(),
		    // ],
        	


        ]);


        Schema::enableForeignKeyConstraints();


    }
}
