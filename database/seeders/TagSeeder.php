<?php

namespace Database\Seeders;

use App\Models\Tag;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        Tag::truncate();

        Tag::insert([
            // 1
        	[
        		'title' => 'Eid Collection',
        		'url' => Str::slug('Eid Collection'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 2
        	[
        		'title' => 'MensFashion',
        		'url' => Str::slug('MensFashion'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 3
        	[
        		'title' => 'WomensCollection',
        		'url' => Str::slug('WomensCollection'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 4
        	[
        		'title' => 'Trendy',
        		'url' => Str::slug('Trendy'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 5
        	[
        		'title' => 'Fashion',
        		'url' => Str::slug('Fashion'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 6
        	[
        		'title' => 'Panjabi',
        		'url' => Str::slug('Panjabi'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 7
        	[
        		'title' => 'Pajama',
        		'url' => Str::slug('Pajama'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 8
        	[
        		'title' => 'Tupi',
        		'url' => Str::slug('Tupi'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 9
        	[
        		'title' => 'Muslim Cap',
        		'url' => Str::slug('Muslim Cap'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 10
        	[
        		'title' => 'Prayer Hat',
        		'url' => Str::slug('Prayer Hat'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 11
        	[
        		'title' => 'Abaha',
        		'url' => Str::slug('Abaha'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 12
        	[
        		'title' => 'Haji Rumal',
        		'url' => Str::slug('Haji Rumal'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 13
        	[
        		'title' => 'Janamaz',
        		'url' => Str::slug('Janamaz'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 14
        	[
        		'title' => 'Prayer Mat',
        		'url' => Str::slug('Prayer Mat'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 15
        	[
        		'title' => 'Tasbih',
        		'url' => Str::slug('Tasbih'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 16
        	[
        		'title' => 'Ator',
        		'url' => Str::slug('Ator'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 17
        	[
        		'title' => 'Perfume',
        		'url' => Str::slug('Perfume'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 18
        	[
        		'title' => 'ননঅ্যালকোহলযুক্ত আতর',
        		'url' => Str::slug('ননঅ্যালকোহলযুক্ত আতর'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 19
        	[
        		'title' => 'Khimar',
        		'url' => Str::slug('Khimar'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 20
        	[
        		'title' => 'খিমার',
        		'url' => Str::slug('খিমার'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 21
        	[
        		'title' => 'Abaya',
        		'url' => Str::slug('Abaya'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 22
        	[
        		'title' => 'Burkha',
        		'url' => Str::slug('Burkha'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 23
        	[
        		'title' => 'Style',
        		'url' => Str::slug('Style'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
           
            // 24
        	[
        		'title' => 'NewArrivals',
        		'url' => Str::slug('NewArrivals'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 25
        	[
        		'title' => 'Rise',
        		'url' => Str::slug('Rise'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 26
        	[
        		'title' => 'Infinity',
        		'url' => Str::slug('Infinity'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],
            // 27
        	[
        		'title' => 'Twelve',
        		'url' => Str::slug('Twelve'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
        	],


        ]);

        Schema::enableForeignKeyConstraints();
    }
}
