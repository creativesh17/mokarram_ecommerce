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


                'description' => '<div class="full-description" itemprop="description">
                <p>Mens Cotton Pajama<br>Item Code: FF00000274<br><strong>Details:</strong><br>Product Type: Mens Pajama<br>Fabric: 100% Cotton<br>Gender: Male &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>Style: Casual &amp; Fashion<br>Fit Type: Slim Fit<br>Elastic &amp; Ribbon: Available in Waist<br>Quality: Premium Quality Product<br>Care: Hand Wash in normal water with mild detergent. Please don’t use the washing machine, Wash smoothly.<br>Color: As Given Picture<br><span style="font-family: verdana, geneva, sans-serif; font-size: 10pt;">Size: 38, 40, 42.</span></p><p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva,sans-serif;"><strong>Size Chart:</strong>&nbsp;&nbsp; <br></span></span></p><table style="box-sizing: border-box; border-spacing: 0px; border-collapse: collapse; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; margin: 15px 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 12px; vertical-align: baseline; width: 464px; color: #555555; font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; line-height: normal; text-align: left; background: #ffffff; height: 148px;" border="1" cellspacing="0" cellpadding="0"><tbody style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background: transparent;"><tr style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; font-size: 12px; vertical-align: baseline; background: transparent none repeat scroll 0% 0%; height: 28px;"><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 76px; height: 58px;" rowspan="2"><span style="color: #000000;"><strong><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; vertical-align: baseline; background: transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;">Size Chart:</span></span></span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 240px; height: 28px;" colspan="5"><span style="color: #000000;"><strong><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; vertical-align: baseline; background: transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;">Measurement (Inch.)</span></span></span></strong></span></td></tr><tr style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; font-size: 12px; vertical-align: baseline; background: transparent none repeat scroll 0% 0%; height: 30px;"><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 53px; height: 30px;"><span style="color: #000000;"><strong><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">Length</span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 78px; height: 30px;"><span style="color: #000000;"><strong><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">&nbsp;WAIST&nbsp;<br>(With Elastic)&nbsp;</span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 51px; height: 30px;"><span style="color: #000000;"><strong><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">WAIST&nbsp;</span></strong></span><br><span style="color: #000000;"><strong><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">(Without Elastic)</span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 45px;"><span style="color: #000000;"><strong><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">HIP</span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 13px; height: 30px;"><span style="color: #000000;"><strong>HEM</strong></span></td></tr><tr style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; font-size: 12px; vertical-align: baseline; background: transparent none repeat scroll 0% 0%; height: 30px;"><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 76px; height: 30px;" data-th="Size Chart:"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><strong style="box-sizing: border-box; font-weight: bold; margin: 0px; padding: 0px; border: 0px none; outline: 0px; vertical-align: baseline; background: transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;">38<br></span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 53px; height: 30px;" data-th="Length"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">37.5</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 78px; height: 30px;" data-th="Width"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">24</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 51px; height: 30px;"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">28-34</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 45px;"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">45</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 13px; height: 30px;"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">6.5<br></span></td></tr><tr style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; font-size: 12px; vertical-align: baseline; background: transparent none repeat scroll 0% 0%; height: 30px;"><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 76px; height: 30px;" data-th="Size Chart:"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><strong style="box-sizing: border-box; font-weight: bold; margin: 0px; padding: 0px; border: 0px none; outline: 0px; vertical-align: baseline; background: transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;">40<br></span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 53px; height: 30px;" data-th="Length"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">39</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 78px; height: 30px;" data-th="Width"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">24</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 51px; height: 30px;"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">30-36</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 45px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">46</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 13px; height: 30px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">6.5<br></span></td></tr><tr style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; font-size: 12px; vertical-align: baseline; background: transparent none repeat scroll 0% 0%; height: 30px;"><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 76px; height: 30px;" data-th="Size Chart:"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><strong style="box-sizing: border-box; font-weight: bold; margin: 0px; padding: 0px; border: 0px none; outline: 0px; vertical-align: baseline; background: transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;">42<br></span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 53px; height: 30px;" data-th="Length"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">41.5</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 78px; height: 30px;" data-th="Width"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">24</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 51px; height: 30px;"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">32-38</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 45px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">47</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 13px; height: 30px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">6.5</span></td></tr></tbody></table><p style="text-align: justify;"><span style="font-family: verdana, geneva;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important; font-size: 10pt;">N.B: Please check the size chart and select a size before placing an order.</span><span style="font-size: 10pt;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><strong><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;"> </span></span></span></strong></span></span></span></span></span></span></span></span></span></span></span></p>
                <p><span style="font-family: verdana,geneva; font-size: 10pt;"><span style="box-sizing: border-box; color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 18.5714px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span style="font-size: 10pt;"><span style="font-family: verdana, geneva, sans-serif;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box; font-family: verdana,geneva;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><span style="font-family: verdana,geneva;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; font-family: verdana,geneva; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;"><span style="font-family: verdana,geneva,sans-serif;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><strong><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;">Note: </span><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;">Product delivery duration may vary due to product availability in stock.</span></span></span></strong></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
                <p><span style="font-family: verdana,geneva; font-size: 10pt;"><span style="box-sizing: border-box; color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 18.5714px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;">Disclaimer: <span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"> Please note that</span></span></span></span></span> this is a replica product. The color &amp; design pattern of the replica products may vary up to 20% to 30% from the original product.</span></span></span></span></span></span></span></span></span></span></span></span></p></div>',


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


                'description' => '<div class="full-description" itemprop="description">
                <p>Mens Cotton Pajama<br>Item Code: FF00000274<br><strong>Details:</strong><br>Product Type: Mens Pajama<br>Fabric: 100% Cotton<br>Gender: Male &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>Style: Casual &amp; Fashion<br>Fit Type: Slim Fit<br>Elastic &amp; Ribbon: Available in Waist<br>Quality: Premium Quality Product<br>Care: Hand Wash in normal water with mild detergent. Please don’t use the washing machine, Wash smoothly.<br>Color: As Given Picture<br><span style="font-family: verdana, geneva, sans-serif; font-size: 10pt;">Size: 38, 40, 42.</span></p><p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva,sans-serif;"><strong>Size Chart:</strong>&nbsp;&nbsp; <br></span></span></p><table style="box-sizing: border-box; border-spacing: 0px; border-collapse: collapse; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; margin: 15px 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 12px; vertical-align: baseline; width: 464px; color: #555555; font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; line-height: normal; text-align: left; background: #ffffff; height: 148px;" border="1" cellspacing="0" cellpadding="0"><tbody style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background: transparent;"><tr style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; font-size: 12px; vertical-align: baseline; background: transparent none repeat scroll 0% 0%; height: 28px;"><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 76px; height: 58px;" rowspan="2"><span style="color: #000000;"><strong><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; vertical-align: baseline; background: transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;">Size Chart:</span></span></span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 240px; height: 28px;" colspan="5"><span style="color: #000000;"><strong><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; vertical-align: baseline; background: transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;">Measurement (Inch.)</span></span></span></strong></span></td></tr><tr style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; font-size: 12px; vertical-align: baseline; background: transparent none repeat scroll 0% 0%; height: 30px;"><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 53px; height: 30px;"><span style="color: #000000;"><strong><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">Length</span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 78px; height: 30px;"><span style="color: #000000;"><strong><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">&nbsp;WAIST&nbsp;<br>(With Elastic)&nbsp;</span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 51px; height: 30px;"><span style="color: #000000;"><strong><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">WAIST&nbsp;</span></strong></span><br><span style="color: #000000;"><strong><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">(Without Elastic)</span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 45px;"><span style="color: #000000;"><strong><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">HIP</span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 13px; height: 30px;"><span style="color: #000000;"><strong>HEM</strong></span></td></tr><tr style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; font-size: 12px; vertical-align: baseline; background: transparent none repeat scroll 0% 0%; height: 30px;"><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 76px; height: 30px;" data-th="Size Chart:"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><strong style="box-sizing: border-box; font-weight: bold; margin: 0px; padding: 0px; border: 0px none; outline: 0px; vertical-align: baseline; background: transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;">38<br></span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 53px; height: 30px;" data-th="Length"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">37.5</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 78px; height: 30px;" data-th="Width"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">24</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 51px; height: 30px;"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">28-34</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 45px;"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">45</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 13px; height: 30px;"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">6.5<br></span></td></tr><tr style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; font-size: 12px; vertical-align: baseline; background: transparent none repeat scroll 0% 0%; height: 30px;"><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 76px; height: 30px;" data-th="Size Chart:"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><strong style="box-sizing: border-box; font-weight: bold; margin: 0px; padding: 0px; border: 0px none; outline: 0px; vertical-align: baseline; background: transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;">40<br></span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 53px; height: 30px;" data-th="Length"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">39</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 78px; height: 30px;" data-th="Width"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">24</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 51px; height: 30px;"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">30-36</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 45px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">46</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 13px; height: 30px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">6.5<br></span></td></tr><tr style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; font-size: 12px; vertical-align: baseline; background: transparent none repeat scroll 0% 0%; height: 30px;"><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 76px; height: 30px;" data-th="Size Chart:"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><strong style="box-sizing: border-box; font-weight: bold; margin: 0px; padding: 0px; border: 0px none; outline: 0px; vertical-align: baseline; background: transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;">42<br></span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 53px; height: 30px;" data-th="Length"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">41.5</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 78px; height: 30px;" data-th="Width"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">24</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 51px; height: 30px;"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">32-38</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 45px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">47</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 13px; height: 30px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">6.5</span></td></tr></tbody></table><p style="text-align: justify;"><span style="font-family: verdana, geneva;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important; font-size: 10pt;">N.B: Please check the size chart and select a size before placing an order.</span><span style="font-size: 10pt;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><strong><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;"> </span></span></span></strong></span></span></span></span></span></span></span></span></span></span></span></p>
                <p><span style="font-family: verdana,geneva; font-size: 10pt;"><span style="box-sizing: border-box; color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 18.5714px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span style="font-size: 10pt;"><span style="font-family: verdana, geneva, sans-serif;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box; font-family: verdana,geneva;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><span style="font-family: verdana,geneva;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; font-family: verdana,geneva; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;"><span style="font-family: verdana,geneva,sans-serif;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><strong><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;">Note: </span><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;">Product delivery duration may vary due to product availability in stock.</span></span></span></strong></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
                <p><span style="font-family: verdana,geneva; font-size: 10pt;"><span style="box-sizing: border-box; color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 18.5714px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;">Disclaimer: <span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"> Please note that</span></span></span></span></span> this is a replica product. The color &amp; design pattern of the replica products may vary up to 20% to 30% from the original product.</span></span></span></span></span></span></span></span></span></span></span></span></p></div>',



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

                'description' => '<div class="full-description" itemprop="description">
                <p>Mens Cotton Pajama<br>Item Code: FF00000274<br><strong>Details:</strong><br>Product Type: Mens Pajama<br>Fabric: 100% Cotton<br>Gender: Male &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br>Style: Casual &amp; Fashion<br>Fit Type: Slim Fit<br>Elastic &amp; Ribbon: Available in Waist<br>Quality: Premium Quality Product<br>Care: Hand Wash in normal water with mild detergent. Please don’t use the washing machine, Wash smoothly.<br>Color: As Given Picture<br><span style="font-family: verdana, geneva, sans-serif; font-size: 10pt;">Size: 38, 40, 42.</span></p><p><span style="font-size: 10pt;"><span style="font-family: verdana,geneva,sans-serif;"><strong>Size Chart:</strong>&nbsp;&nbsp; <br></span></span></p><table style="box-sizing: border-box; border-spacing: 0px; border-collapse: collapse; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: normal; letter-spacing: normal; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; margin: 15px 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 12px; vertical-align: baseline; width: 464px; color: #555555; font-family: Tahoma, Verdana, Arial, Helvetica, sans-serif; line-height: normal; text-align: left; background: #ffffff; height: 148px;" border="1" cellspacing="0" cellpadding="0"><tbody style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-size: 12px; vertical-align: baseline; background: transparent;"><tr style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; font-size: 12px; vertical-align: baseline; background: transparent none repeat scroll 0% 0%; height: 28px;"><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 76px; height: 58px;" rowspan="2"><span style="color: #000000;"><strong><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; vertical-align: baseline; background: transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;">Size Chart:</span></span></span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 240px; height: 28px;" colspan="5"><span style="color: #000000;"><strong><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; vertical-align: baseline; background: transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;">Measurement (Inch.)</span></span></span></strong></span></td></tr><tr style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; font-size: 12px; vertical-align: baseline; background: transparent none repeat scroll 0% 0%; height: 30px;"><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 53px; height: 30px;"><span style="color: #000000;"><strong><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">Length</span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 78px; height: 30px;"><span style="color: #000000;"><strong><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">&nbsp;WAIST&nbsp;<br>(With Elastic)&nbsp;</span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 51px; height: 30px;"><span style="color: #000000;"><strong><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">WAIST&nbsp;</span></strong></span><br><span style="color: #000000;"><strong><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">(Without Elastic)</span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 45px;"><span style="color: #000000;"><strong><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">HIP</span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 13px; height: 30px;"><span style="color: #000000;"><strong>HEM</strong></span></td></tr><tr style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; font-size: 12px; vertical-align: baseline; background: transparent none repeat scroll 0% 0%; height: 30px;"><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 76px; height: 30px;" data-th="Size Chart:"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><strong style="box-sizing: border-box; font-weight: bold; margin: 0px; padding: 0px; border: 0px none; outline: 0px; vertical-align: baseline; background: transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;">38<br></span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 53px; height: 30px;" data-th="Length"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">37.5</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 78px; height: 30px;" data-th="Width"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">24</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 51px; height: 30px;"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">28-34</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 45px;"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">45</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 13px; height: 30px;"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">6.5<br></span></td></tr><tr style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; font-size: 12px; vertical-align: baseline; background: transparent none repeat scroll 0% 0%; height: 30px;"><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 76px; height: 30px;" data-th="Size Chart:"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><strong style="box-sizing: border-box; font-weight: bold; margin: 0px; padding: 0px; border: 0px none; outline: 0px; vertical-align: baseline; background: transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;">40<br></span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 53px; height: 30px;" data-th="Length"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">39</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 78px; height: 30px;" data-th="Width"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">24</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 51px; height: 30px;"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">30-36</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 45px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">46</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 13px; height: 30px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">6.5<br></span></td></tr><tr style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; font-size: 12px; vertical-align: baseline; background: transparent none repeat scroll 0% 0%; height: 30px;"><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 76px; height: 30px;" data-th="Size Chart:"><span style="font-size: 10pt; font-family: verdana,geneva,sans-serif;"><strong style="box-sizing: border-box; font-weight: bold; margin: 0px; padding: 0px; border: 0px none; outline: 0px; vertical-align: baseline; background: transparent;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;">42<br></span></strong></span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: none 0px; font-size: 12px; vertical-align: middle; text-align: center; background: none 0% 0% repeat scroll transparent; width: 53px; height: 30px;" data-th="Length"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">41.5</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 78px; height: 30px;" data-th="Width"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">24</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 51px; height: 30px;"><span style="font-size: 10pt; font-family: verdana, geneva, sans-serif;">32-38</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 45px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">47</span></td><td style="box-sizing: border-box; padding: 5px; margin: 0px; border: 2px solid #000000; outline: 0px; font-size: 12px; vertical-align: middle; text-align: center; background: transparent; width: 13px; height: 30px;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px; font-size: 10pt; vertical-align: baseline; background: transparent; font-family: verdana, geneva, sans-serif;">6.5</span></td></tr></tbody></table><p style="text-align: justify;"><span style="font-family: verdana, geneva;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important; font-size: 10pt;">N.B: Please check the size chart and select a size before placing an order.</span><span style="font-size: 10pt;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><strong><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;"> </span></span></span></strong></span></span></span></span></span></span></span></span></span></span></span></p>
                <p><span style="font-family: verdana,geneva; font-size: 10pt;"><span style="box-sizing: border-box; color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 18.5714px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"><span style="font-size: 10pt;"><span style="font-family: verdana, geneva, sans-serif;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box; font-family: verdana,geneva;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important;"><span style="font-family: verdana,geneva;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; font-family: verdana,geneva; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;"><span style="font-family: verdana,geneva,sans-serif;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><strong><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;"><span class="Apple-converted-space"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;">Note: </span><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;">Product delivery duration may vary due to product availability in stock.</span></span></span></strong></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p>
                <p><span style="font-family: verdana,geneva; font-size: 10pt;"><span style="box-sizing: border-box; color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 18.5714px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="box-sizing: border-box; margin: 0px; padding: 0px; border: 0px none; outline: 0px none; vertical-align: baseline; color: #ff0000; background: transparent none repeat scroll 0% 0%;"><span style="color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;">Disclaimer: <span style="color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="color: #e36c0a; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; float: none;"> Please note that</span></span></span></span></span> this is a replica product. The color &amp; design pattern of the replica products may vary up to 20% to 30% from the original product.</span></span></span></span></span></span></span></span></span></span></span></span></p></div>',


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


            // 11
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "3 pcs Prayer Caps Namaz Tupi Muslim",
		        'product_url' => Str::slug('3 pcs Prayer Caps Namaz Tupi Muslim'),
		        'brand_id' => 4,
                'selected_categories' => "[1, 4]",
                'short_description' => "<ul><li><p>High quality Muslim Prayer Cap/tupi</p></li></ul>",

                'description' => "High quality Muslim Prayer Cap/tupi Made in Turkey. They are perfect prayer caps and excellent for travel or to fit in your pocket.This is a very light-weight . Materials is soft and stretchy which will make you very comfortable.",

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 260.00,
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
                'page_title' => "3 pcs Prayer Caps Namaz Tupi Muslim",
                'search_keywords' => "3 pcs Prayer Caps Namaz Tupi Muslim",
                'meta_description' => "3 pcs Prayer Caps Namaz Tupi Muslim",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("3 pcs Prayer Caps Namaz Tupi Muslim"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 12
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "20×20×5cm Men Muslim Cap Prayer Hat(null)",
		        'product_url' => Str::slug('20×20×5cm Men Muslim Cap Prayer Hat(null)'),
		        'brand_id' => 4,
                'selected_categories' => "[1, 4]",

                'short_description' => "<ul><li><p>High quality Muslim Prayer Cap/tupi Made in Turkey. They are perfect prayer caps and excellent for travel or to fit in your pocket.This is a very light-weight . Materials is soft and stretchy which will make you very comfortable.</p></li></ul>",

                'description' => '<div class="full-description" itemprop="description">
                                <p><br>Specifications:<br>Color:?Black<br>Material:?Polyester/Cotton<br>Dimension:?20×20×5cm / 7.8×7.8×2"<br><br>Feature<br>- Nice design Muslim prayer caps.<br>- Lightweight and comfortable wearing.<br>- Good Muslim Gift for Eid, Ramadan, or other good occasions.<br>- Circumference: 22~24 inches.<br>&nbsp;</p></div>',


                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 450.00,
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
                'page_title' => "20×20×5cm Men Muslim Cap Prayer Hat(null)",
                'search_keywords' => "20×20×5cm Men Muslim Cap Prayer Hat(null)",
                'meta_description' => "20×20×5cm Men Muslim Cap Prayer Hat(null)",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("20×20×5cm Men Muslim Cap Prayer Hat(null)"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 13
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "Muslim Prayer Cap - White",
		        'product_url' => Str::slug('Muslim Prayer Cap - White'),
		        'brand_id' => 6,
                'selected_categories' => "[1, 4]",

                'short_description' => "<ul><li><p>High quality Muslim Prayer Cap</p></li></ul>",

                'description' => "High quality Muslim Prayer Cap/tupi Made in Turkey. They are perfect prayer caps and excellent for travel or to fit in your pocket.This is a very light-weight . Materials is soft and stretchy which will make you very comfortable.",


                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 100.00,
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
                'page_title' => "Muslim Prayer Cap - White",
                'search_keywords' => "Muslim Prayer Cap - White",
                'meta_description' => "Muslim Prayer Cap - White",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("Muslim Prayer Cap - White"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 14
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "Islamic Product Prayer Tupi - free size for Man",
		        'product_url' => Str::slug('Islamic Product Prayer Tupi - free size for Man'),
		        'brand_id' => 6,
                'selected_categories' => "[1, 4]",

                'short_description' => "<ul><li><p>High quality Muslim Prayer Cap</p></li></ul>",

                'description' => '<div class="full-description" itemprop="description"><p style="text-align: justify;">Islamic Product Prayer Tupi - free size for Man<br>Cap name : Islamic Product Prayer Tupi<br>100% Brand New &amp; High Quality Imported Product<br>মুসলিম ভাইদের জন্য টুপি<br>খুব আরামদায়ক টুপি<br>সব সময় মাথায় পড়ার মত টুপি<br>পড়তে আরামদায়ক<br>Color : As Given Picture&nbsp;</p><p style="text-align: justify;"><span style="font-family: verdana,geneva,sans-serif; font-size: 10pt;"><span style="font-size: 10pt;"><span style="box-sizing: border-box; color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; background-color: #ffffff;"><span style="font-size: 10pt;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline ! important; background-color: #ffffff;"><span style="color: #666666; font-size: 10pt; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.6px; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="color: #666666; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 18.6px; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline ! important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; color: #e36c0a; line-height: 18.5714px; text-align: start; float: none; display: inline ! important; background-color: #ffffff;"><span style="font-size: 10pt;"><span style="color: #ff0000; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none; background-color: #ffffff;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #ff0000; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important; background-color: #ffffff;"><span style="box-sizing: border-box; color: #e36c0a; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline !important;"><strong><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; -webkit-text-stroke-width: 0px; display: inline !important; float: none;"><span class="Apple-converted-space"><span style="color: #e36c0a; font-style: normal; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline !important; float: none;">Note: Product delivery duration may vary due to product availability in stock.</span></span></span></strong></span></span></span></span></span></span></span></span></span></span></span></span></span></span></p><p style="text-align: justify;"><span style="font-family: verdana,geneva,sans-serif; font-size: 10pt;"><span style="font-size: 10pt;"><span style="box-sizing: border-box; color: #ff0000; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: normal; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; display: inline ! important; background-color: #ffffff;"><span style="font-size: 10pt;"><span style="box-sizing: border-box; color: #e36c0a; font-style: normal; font-variant: normal; letter-spacing: normal; line-height: 16.8667px; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; word-spacing: 0px; float: none; display: inline ! important; background-color: #ffffff;">Disclaimer: The actual color of the physical product may slightly vary due to the deviation of lighting sources, photography or your device display settings.</span></span></span></span></span></p></div>',


                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 68.00,
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
                'page_title' => "Islamic Product Prayer Tupi - free size for Man",
                'search_keywords' => "Islamic Product Prayer Tupi - free size for Man",
                'meta_description' => "Islamic Product Prayer Tupi - free size for Man",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("Islamic Product Prayer Tupi - free size for Man"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],


            // 15
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "Black Bisht Cloak Arab Dress Thobe Saudi Men's Robe (FA-02)",
		        'product_url' => Str::slug('Black Bisht Cloak Arab Dress Thobe Saudi Mens Robe (FA-02)'),
		        'brand_id' => 7,
                'selected_categories' => "[1, 5]",

                'short_description' => "<ul><li><p>High quality Saudi Abaha</p></li></ul>",

                'description' => '<div id="productDescription" class="a-section a-spacing-small" style="margin: 0.5em 0px 0em 25px; color: rgb(51, 51, 51); overflow-wrap: break-word; font-size: small; line-height: initial; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif;"><p style="padding: 0px; margin: 0em 0px 1em 1em;">Bisht comes only in one Large size . you would have to do alterations to fit your size. This is not costume-made Bisht, Amazing-Best-Quality-Mens-Islamic-Arabian-Cloak-Bisht-thobe-Eid What is Bisht. A Bisht Is A Traditional Arabic Men’s Cloak Famous In The Arabian Gulf And Some Arabic Countries. Its Worn for Prestige and Special Occasions like Weddings and Official gatherings... Bisht Is A Persian Word. The Arabic Word For Bisht Is Mishlah Or Abaya. Bisht Started Since More Than 1500 Years Ago And The Design Of Bisht Since The Time It Started Has Little Changes Until Present. Premium Quality Free size. The best length is between63 inches to 66 inches. 170 CM, long sleeves Approx 22 inches.</p></div>',


                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 3150.00,
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
                'page_title' => "Black Bisht Cloak Arab Dress Thobe Saudi Men's Robe (FA-02)",
                'search_keywords' => "Black Bisht Cloak Arab Dress Thobe Saudi Men's Robe (FA-02)",
                'meta_description' => "Black Bisht Cloak Arab Dress Thobe Saudi Men's Robe (FA-02)",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("Black Bisht Cloak Arab Dress Thobe Saudi Mens Robe (FA-02)"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],


            // 16
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "ইমামদের স্পেশাল ড্রেস ফুল হাতা জর্জেট আবা",
		        'product_url' => Str::slug('ইমামদের স্পেশাল ড্রেস ফুল হাতা জর্জেট আবা'),
		        'brand_id' => 7,
                'selected_categories' => "[1, 5]",

                'short_description' => "<ul><li><p>High quality Saudi Abaha</p></li></ul>",

                'description' => '<div id="productDescription" class="a-section a-spacing-small" style="margin: 0.5em 0px 0em 25px; color: rgb(51, 51, 51); overflow-wrap: break-word; font-size: small; line-height: initial; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif;"><p style="padding: 0px; margin: 0em 0px 1em 1em;">Bisht comes only in one Large size . you would have to do alterations to fit your size. A Bisht Is A Traditional Arabic Men’s Cloak Famous In The Arabian Gulf And Some Arabic Countries. Its Worn for Prestige and Special Occasions like Weddings and Official gatherings... Bisht Is A Persian Word. The Arabic Word For Bisht Is Mishlah Or Abaya. Bisht Started Since More Than 1500 Years Ago And The Design Of Bisht Since The Time It Started Has Little Changes Until Present. Premium Quality Free size. The best length is between63 inches to 66 inches. 170 CM, long sleeves Approx 22 inches.</p></div>',


                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 3150.00,
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
                'page_title' => "ইমামদের স্পেশাল ড্রেস ফুল হাতা জর্জেট আবা",
                'search_keywords' => "ইমামদের স্পেশাল ড্রেস ফুল হাতা জর্জেট আবা",
                'meta_description' => "ইমামদের স্পেশাল ড্রেস ফুল হাতা জর্জেট আবা",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("ইমামদের স্পেশাল ড্রেস ফুল হাতা জর্জেট আবা"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 17
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "ঈমাম স্পেশাল ড্রেস দেশি আবা ( FB-18 )",
		        'product_url' => Str::slug('ঈমাম স্পেশাল ড্রেস দেশি আবা ( FB-18 )'),
		        'brand_id' => 7,
                'selected_categories' => "[1, 5]",

                'short_description' => "<ul><li><p>High quality Desi Abaha</p></li></ul>",

                'description' => '<div id="productDescription" class="a-section a-spacing-small" style="margin: 0.5em 0px 0em 25px; color: rgb(51, 51, 51); overflow-wrap: break-word; font-size: small; line-height: initial; font-family: &quot;Amazon Ember&quot;, Arial, sans-serif;"><p style="padding: 0px; margin: 0em 0px 1em 1em;">Bisht comes only in one Large size . you would have to do alterations to fit your size. A Bisht Is A Traditional Arabic Men’s Cloak Famous In The Arabian Gulf And Some Arabic Countries.Premium Quality Free size. The best length is between63 inches to 66 inches. 170 CM, long sleeves Approx 22 inches.</p></div>',


                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 1350.00,
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
                'page_title' => "ঈমাম স্পেশাল ড্রেস দেশি আবা ( FB-18 )",
                'search_keywords' => "ঈমাম স্পেশাল ড্রেস দেশি আবা ( FB-18 )",
                'meta_description' => "ঈমাম স্পেশাল ড্রেস দেশি আবা ( FB-18 )",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("ঈমাম স্পেশাল ড্রেস দেশি আবা ( FB-18 )"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],
            

            // 18
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "Haji Rumal Rad & White",
		        'product_url' => Str::slug('Haji Rumal Rad & White'),
		        'brand_id' => 7,
                'selected_categories' => "[1, 7]",

                'short_description' => "<ul><li><p>High quality Saudi Haji Rumal</p></li></ul>",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium Saudi Haji rumal. Made from 100% soft and breathable cotton, it is perfect for any occasion. The Saudi Haji rumal features gorgeous designs, adding a touch of elegance to the simple yet sophisticated design.</p>",


                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 450.00,
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
                'page_title' => "Haji Rumal Rad & White",
                'search_keywords' => "Haji Rumal Rad & White",
                'meta_description' => "Haji Rumal Rad & White",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("Haji Rumal Rad & White"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],
            

            // 19
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "মুসলিমদের জন্য জিন্স নামাজের মাদুর (জয়নামাজ)",
		        'product_url' => Str::slug('মুসলিমদের জন্য জিন্স নামাজের মাদুর (জয়নামাজ)'),
		        'brand_id' => 8,
                'selected_categories' => "[1, 8]",

                'short_description' => "<ul><li><p>High quality Premium Janamaz</p></li></ul>",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium Janamaz. Made from 100% soft and breathable cotton, it is perfect for any occasion. The Janamaz features gorgeous designs, adding a touch of elegance to the simple yet sophisticated design.</p>",


                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 100.00,
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
                'page_title' => "মুসলিমদের জন্য জিন্স নামাজের মাদুর (জয়নামাজ)",
                'search_keywords' => "মুসলিমদের জন্য জিন্স নামাজের মাদুর (জয়নামাজ)",
                'meta_description' => "মুসলিমদের জন্য জিন্স নামাজের মাদুর (জয়নামাজ)",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("মুসলিমদের জন্য জিন্স নামাজের মাদুর (জয়নামাজ)"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],


            // 20
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "সুন্দর প্রার্থনার জয়নামাজ-তুরস্কে তৈরি (বিভিন্ন রঙের)",
		        'product_url' => Str::slug('সুন্দর প্রার্থনার জয়নামাজ-তুরস্কে তৈরি (বিভিন্ন রঙের)'),
		        'brand_id' => 8,
                'selected_categories' => "[1, 8]",

                'short_description' => "<ul><li><p>High quality Premium Janamaz</p></li></ul>",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium Janamaz. Made from 100% soft and breathable cotton, it is perfect for any occasion. The Janamaz features gorgeous designs, adding a touch of elegance to the simple yet sophisticated design.</p>",


                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 386.00,
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
                'page_title' => "সুন্দর প্রার্থনার জয়নামাজ-তুরস্কে তৈরি (বিভিন্ন রঙের)",
                'search_keywords' => "সুন্দর প্রার্থনার জয়নামাজ-তুরস্কে তৈরি (বিভিন্ন রঙের)",
                'meta_description' => "সুন্দর প্রার্থনার জয়নামাজ-তুরস্কে তৈরি (বিভিন্ন রঙের)",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("সুন্দর প্রার্থনার জয়নামাজ-তুরস্কে তৈরি (বিভিন্ন রঙের)"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],
            

            // 21
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "Crystal Tasbih 100 Prayer Beads-Green",
		        'product_url' => Str::slug('Crystal Tasbih 100 Prayer Beads-Green'),
		        'brand_id' => 9,
                'selected_categories' => "[1, 9]",

                'short_description' => "<ul><li><p>High quality Premium Crystal Tasbih</p></li></ul>",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium Crystal Tasbih. It is perfect for any occasion.</p>",


                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 50.00,
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
                'page_title' => "Crystal Tasbih 100 Prayer Beads-Green",
                'search_keywords' => "Crystal Tasbih 100 Prayer Beads-Green",
                'meta_description' => "Crystal Tasbih 100 Prayer Beads-Green",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("Crystal Tasbih 100 Prayer Beads-Green"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],


            // 22
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "Led ডিজিটাল কাউন্টার পোর্টেবল ফিঙ্গার তাসবিহ",
		        'product_url' => Str::slug('Led ডিজিটাল কাউন্টার পোর্টেবল ফিঙ্গার তাসবিহ'),
		        'brand_id' => 9,
                'selected_categories' => "[1, 9]",

                'short_description' => "<ul><li><p>High quality Premium Led Digital Tasbih</p></li></ul>",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium Led Digital Tasbih. It is perfect for any occasion.</p>",


                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 213.00,
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
                'page_title' => "Led ডিজিটাল কাউন্টার পোর্টেবল ফিঙ্গার তাসবিহ",
                'search_keywords' => "Led ডিজিটাল কাউন্টার পোর্টেবল ফিঙ্গার তাসবিহ",
                'meta_description' => "Led ডিজিটাল কাউন্টার পোর্টেবল ফিঙ্গার তাসবিহ",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("Led ডিজিটাল কাউন্টার পোর্টেবল ফিঙ্গার তাসবিহ"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],
            

            // 23
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "পুরুষদের জন্য 6 মাসের জন্য 6 পিস 6 টি ভিন্ন মিনি কম্বো আতর পারফিউম ননঅ্যালকোহলযুক্ত 3ml",
		        'product_url' => Str::slug('পুরুষদের জন্য 6 মাসের জন্য 6 পিস 6 টি ভিন্ন মিনি কম্বো আতর পারফিউম ননঅ্যালকোহলযুক্ত 3ml'),
		        'brand_id' => 4,
                'selected_categories' => "[6]",

                'short_description' => "<ul><li>Best Ator</li></ul>]",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium Ator. you’re sure to find the perfect ator for you.</p>",

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 159.00,
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
                'page_title' => "পুরুষদের জন্য 6 মাসের জন্য 6 পিস 6 টি ভিন্ন মিনি কম্বো আতর পারফিউম ননঅ্যালকোহলযুক্ত 3ml",
                'search_keywords' => "পুরুষদের জন্য 6 মাসের জন্য 6 পিস 6 টি ভিন্ন মিনি কম্বো আতর পারফিউম ননঅ্যালকোহলযুক্ত 3ml",
                'meta_description' => "পুরুষদের জন্য 6 মাসের জন্য 6 পিস 6 টি ভিন্ন মিনি কম্বো আতর পারফিউম ননঅ্যালকোহলযুক্ত 3ml",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("পুরুষদের জন্য 6 মাসের জন্য 6 পিস 6 টি ভিন্ন মিনি কম্বো আতর পারফিউম ননঅ্যালকোহলযুক্ত 3ml"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 24
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "SREEZON Premium Arabian Bakhoor(অ্যারাবিয়ান বাখুর)",
		        'product_url' => Str::slug('SREEZON Premium Arabian Bakhoor(অ্যারাবিয়ান বাখুর)'),
		        'brand_id' => 4,
                'selected_categories' => "[6]",

                'short_description' => "<ul><li>Best Ator</li></ul>]",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium Ator. you’re sure to find the perfect ator for you.</p>",

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 210.00,
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
                'page_title' => "SREEZON Premium Arabian Bakhoor(অ্যারাবিয়ান বাখুর)",
                'search_keywords' => "SREEZON Premium Arabian Bakhoor(অ্যারাবিয়ান বাখুর)",
                'meta_description' => "SREEZON Premium Arabian Bakhoor(অ্যারাবিয়ান বাখুর)",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("SREEZON Premium Arabian Bakhoor(অ্যারাবিয়ান বাখুর)"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],


            // 25
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "বনলতা ভি আই পি খিমার ডুবাই চেরি কাপড় ( KM-05 )",
		        'product_url' => Str::slug('বনলতা ভি আই পি খিমার ডুবাই চেরি কাপড় ( KM-05 )'),
		        'brand_id' => 11,
                'selected_categories' => "[10, 11]",

                'short_description' => "<ul><li>Best Khimar</li></ul>]",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium Khimar. you’re sure to find the perfect ator for you.</p>",

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 1650.00,
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
                'page_title' => "বনলতা ভি আই পি খিমার ডুবাই চেরি কাপড় ( KM-05 )",
                'search_keywords' => "বনলতা ভি আই পি খিমার ডুবাই চেরি কাপড় ( KM-05 )",
                'meta_description' => "বনলতা ভি আই পি খিমার ডুবাই চেরি কাপড় ( KM-05 )",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("বনলতা ভি আই পি খিমার ডুবাই চেরি কাপড় ( KM-05 )"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 26
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "New High-Quality Mohuya3 Borka Set Dubai Charry Fabric Abaya Burqa",
		        'product_url' => Str::slug('New High-Quality Mohuya3 Borka Set Dubai Charry Fabric Abaya Burqa'),
		        'brand_id' => 7,
                'selected_categories' => "[10, 12]",

                'short_description' => "<ul><li><p>Elevate Modesty with Elegance for Muslim Women - Perfect for All Seasons and Occasions</p></li></ul>]",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium abaya burkha. you’re sure to find the perfect ator for you.Elevate Modesty with Elegance for Muslim Women - Perfect for All Seasons and Occasions</p>",

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 1695.00,
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
                'page_title' => "New High-Quality Mohuya3 Borka Set Dubai Charry Fabric Abaya Burqa",
                'search_keywords' => "New High-Quality Mohuya3 Borka Set Dubai Charry Fabric Abaya Burqa",
                'meta_description' => "New High-Quality Mohuya3 Borka Set Dubai Charry Fabric Abaya Burqa",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("New High-Quality Mohuya3 Borka Set Dubai Charry Fabric Abaya Burqa"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],

            // 27
            [
        		'sku' => 'A584786',
		        'is_top_product' => 1,
		        'view_count' => 4,
		        'product_name' => "নতুন আকর্ষণীয় প্রিমিয়াম কোয়ালিটি স্টেপ কনট্রাস্ট ইরানি পার্টি আবায়া বোরখা সেট",
		        'product_url' => Str::slug('নতুন আকর্ষণীয় প্রিমিয়াম কোয়ালিটি স্টেপ কনট্রাস্ট ইরানি পার্টি আবায়া বোরখা সেট'),
		        'brand_id' => 7,
                'selected_categories' => "[10, 12]",

                'short_description' => "<ul><li><p>Elevate Modesty with Elegance for Muslim Women - Perfect for All Seasons and Occasions</p></li></ul>]",

                'description' => "<p>Bring a touch of tradition to your wardrobe with this Premium abaya burkha. you’re sure to find the perfect ator for you.Elevate Modesty with Elegance for Muslim Women - Perfect for All Seasons and Occasions - দুবাই চ্যারি ফ্যাব্রিক, মুসলিম আউটারওয়্যার কালেকশন</p>",

                'specification' => "",

                'image' => null,
                'cost' => null,
                'sales_price' => 1136.00,
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
                'page_title' => "নতুন আকর্ষণীয় প্রিমিয়াম কোয়ালিটি স্টেপ কনট্রাস্ট ইরানি পার্টি আবায়া বোরখা সেট",
                'search_keywords' => "নতুন আকর্ষণীয় প্রিমিয়াম কোয়ালিটি স্টেপ কনট্রাস্ট ইরানি পার্টি আবায়া বোরখা সেট",
                'meta_description' => "নতুন আকর্ষণীয় প্রিমিয়াম কোয়ালিটি স্টেপ কনট্রাস্ট ইরানি পার্টি আবায়া বোরখা সেট",
                'schema_tag' => null,
                'video_url' => null,
                'creator' => null,
                'slug' => Str::slug("নতুন আকর্ষণীয় প্রিমিয়াম কোয়ালিটি স্টেপ কনট্রাস্ট ইরানি পার্টি আবায়া বোরখা সেট"),
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
		    ],














        	



        ]);


        Schema::enableForeignKeyConstraints();


    }
}
