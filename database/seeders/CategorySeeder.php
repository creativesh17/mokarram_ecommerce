<?php

namespace Database\Seeders;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {

        Schema::disableForeignKeyConstraints();
        Category::truncate();

        Category::insert([
            // 1
        	[
        		'is_top_category' => 1,
        		'is_home_category' => 1,
        		'is_nav_category' => 1,
        		'name' => "Men's Fashion",
        		'url' => 'mens-fashion',
        		'description' => '<p>Coolest collection is available</p>',
                'parent_id' => 0,
                'category_image' => null,
                'page_title' => 'mens-fashion',
                'meta_keywords' => 'mens-fashion',
                'meta_description' => 'mens-fashion',
                'search_keywords' => 'mens-fashion',
                'creator' => '1',
        		'slug' => 'mens-fashion',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 2
        	[
        		'is_top_category' => 1,
        		'is_home_category' => 1,
        		'is_nav_category' => 1,
        		'name' => 'Panjabi',
        		'url' => 'panjabi',
        		'description' => '<p>Nice panjabis are avaialable</p>',
                'parent_id' => 1,
                'category_image' => null,
                'page_title' => 'panjabi',
                'meta_keywords' => 'panjabi',
                'meta_description' => 'panjabi',
                'search_keywords' => 'panjabi',
                'creator' => '1',
        		'slug' => 'panjabi',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 3
        	[
        		'is_top_category' => 1,
        		'is_home_category' => 1,
        		'is_nav_category' => 1,
        		'name' => 'Pajama',
        		'url' => 'pajama',
        		'description' => '<p>Nice pajamas are avaialable</p>',
                'parent_id' => 1,
                'category_image' => null,
                'page_title' => 'pajama',
                'meta_keywords' => 'pajama',
                'meta_description' => 'pajama',
                'search_keywords' => 'pajama',
                'creator' => '1',
        		'slug' => 'pajama',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 4
        	[
        		'is_top_category' => 1,
        		'is_home_category' => 1,
        		'is_nav_category' => 1,
        		'name' => 'Tupi',
        		'url' => 'tupi',
        		'description' => '<p>Nice tupi collections are avaialable</p>',
                'parent_id' => 1,
                'category_image' => null,
                'page_title' => 'tupi',
                'meta_keywords' => 'tupi',
                'meta_description' => 'tupi',
                'search_keywords' => 'tupi',
                'creator' => '1',
        		'slug' => 'tupi',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 5
        	[
        		'is_top_category' => 1,
        		'is_home_category' => 1,
        		'is_nav_category' => 1,
        		'name' => 'Abaha',
        		'url' => 'abaha',
        		'description' => '<p>Nice abaha collections are avaialable</p>',
                'parent_id' => 1,
                'category_image' => null,
                'page_title' => 'abaha',
                'meta_keywords' => 'abaha',
                'meta_description' => 'abaha',
                'search_keywords' => 'abaha',
                'creator' => '1',
        		'slug' => 'abaha',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 6
        	[
        		'is_top_category' => 1,
        		'is_home_category' => 1,
        		'is_nav_category' => 1,
        		'name' => 'ATOR',
        		'url' => 'ator',
        		'description' => '<p>Nice ator collections are avaialable</p>',
                'parent_id' => 0,
                'category_image' => null,
                'page_title' => 'ator',
                'meta_keywords' => 'ator',
                'meta_description' => 'ator',
                'search_keywords' => 'ator',
                'creator' => '1',
        		'slug' => 'ator',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 7
        	[
        		'is_top_category' => 1,
        		'is_home_category' => 1,
        		'is_nav_category' => 1,
        		'name' => "Women's Collection",
        		'url' => 'womens-collection',
        		'description' => '<p>Nice womens-collection collections are avaialable</p>',
                'parent_id' => 0,
                'category_image' => null,
                'page_title' => 'womens-collection',
                'meta_keywords' => 'womens-collection',
                'meta_description' => 'womens-collection',
                'search_keywords' => 'womens-collection',
                'creator' => '1',
        		'slug' => 'womens-collection',
                'status' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],

        ]);

        Schema::enableForeignKeyConstraints();
    }
}
