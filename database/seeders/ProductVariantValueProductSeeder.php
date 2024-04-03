<?php

namespace Database\Seeders;

use App\Models\Product\ProductVariantValueProduct;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ProductVariantValueProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Schema::disableForeignKeyConstraints();
        ProductVariantValueProduct::truncate();

        ProductVariantValueProduct::insert([

            // 1
            // 1
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 1,
                'product_id' => 1,
            ],
            // 2
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 2,
                'product_id' => 1,
            ],
            // 3
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 3,
                'product_id' => 1,
            ],
            // 4
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 4,
                'product_id' => 1,
            ],
            // 5
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 5,
                'product_id' => 1,
            ],
            // 6
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 1,
            ],
            // 7
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 1,
            ],
            // 8
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 1,
            ],
            // 9
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 17,
                'product_id' => 1,
            ],

            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 2
            // 10
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 1,
                'product_id' => 2,
            ],
            // 11
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 2,
                'product_id' => 2,
            ],
            // 12
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 3,
                'product_id' => 2,
            ],
            // 13
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 4,
                'product_id' => 2,
            ],
            // 14
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 5,
                'product_id' => 2,
            ],
            // 15
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 2,
            ],
            // 16
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 2,
            ],
            // 17
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 2,
            ],
            // 18
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 17,
                'product_id' => 2,
            ],
            // 19
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 2,
            ],


            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 3
            // 20
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 1,
                'product_id' => 3,
            ],
            // 21
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 2,
                'product_id' => 3,
            ],
            // 22
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 3,
                'product_id' => 3,
            ],
            // 23
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 4,
                'product_id' => 3,
            ],
            // 24
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 5,
                'product_id' => 3,
            ],
            // 25
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 3,
            ],
            // 26
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 3,
            ],
            // 27
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 3,
            ],
            // 28
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 17,
                'product_id' => 3,
            ],
            // 29
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 3,
            ],
            // 30
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 3,
            ],


            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////


            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 4
            // 31
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 1,
                'product_id' => 4,
            ],
            // 32
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 2,
                'product_id' => 4,
            ],
            // 33
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 3,
                'product_id' => 4,
            ],
            // 34
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 4,
                'product_id' => 4,
            ],
            // 35
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 5,
                'product_id' => 4,
            ],
            // 36
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 4,
            ],
            // 37
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 4,
            ],
            // 38
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 4,
            ],
            // 39
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 17,
                'product_id' => 4,
            ],
            // 40
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 4,
            ],
            // 41
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 4,
            ],

            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 5
            // 42
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 1,
                'product_id' => 5,
            ],
            // 43
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 2,
                'product_id' => 5,
            ],
            // 44
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 3,
                'product_id' => 5,
            ],
            // 45
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 4,
                'product_id' => 5,
            ],
            // 46
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 5,
                'product_id' => 5,
            ],
            // 47
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 5,
            ],
            // 48
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 5,
            ],
            // 49
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 5,
            ],
            // 50
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 17,
                'product_id' => 5,
            ],
            // 51
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 5,
            ],
            // 52
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 5,
            ],

            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 6
            // 53
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 1,
                'product_id' => 6,
            ],
            // 54
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 2,
                'product_id' => 6,
            ],
            // 55
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 3,
                'product_id' => 6,
            ],
            // 56
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 4,
                'product_id' => 6,
            ],
            // 57
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 5,
                'product_id' => 6,
            ],
            // 58
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 6,
            ],
            // 59
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 6,
            ],
            // 60
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 6,
            ],
            // 61
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 17,
                'product_id' => 6,
            ],
            // 62
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 6,
            ],
            // 63
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 6,
            ],


            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////


            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 7
            // 64
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 1,
                'product_id' => 7,
            ],
            // 65
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 2,
                'product_id' => 7,
            ],
            // 66
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 3,
                'product_id' => 7,
            ],
            // 67
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 4,
                'product_id' => 7,
            ],
            // 68
            [
                'product_variant_id' => 1,
                'product_variant_value_id' => 5,
                'product_id' => 7,
            ],
            // 69
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 7,
            ],
            // 70
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 7,
            ],
            // 71
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 7,
            ],
            // 72
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 17,
                'product_id' => 7,
            ],
            // 73
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 7,
            ],
            // 74
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 7,
            ],

            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 8
            // 75
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 6,
                'product_id' => 8,
            ],
            // 76
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 7,
                'product_id' => 8,
            ],
            // 77
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 8,
                'product_id' => 8,
            ],
            // 78
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 9,
                'product_id' => 8,
            ],
            // 79
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 10,
                'product_id' => 8,
            ],
            // 80
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 11,
                'product_id' => 8,
            ],
            // 81
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 12,
                'product_id' => 8,
            ],
            // 82
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 13,
                'product_id' => 8,
            ],
            // 83
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 8,
            ],
            // 84
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 8,
            ],
            // 85
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 8,
            ],
            // 86
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 17,
                'product_id' => 8,
            ],
            // 87
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 8,
            ],
            // 88
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 8,
            ],

            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 9
            // 76
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 6,
                'product_id' => 9,
            ],
            // 77
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 7,
                'product_id' => 9,
            ],
            // 78
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 8,
                'product_id' => 9,
            ],
            // 79
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 9,
                'product_id' => 9,
            ],
            // 80
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 10,
                'product_id' => 9,
            ],
            // 81
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 11,
                'product_id' => 9,
            ],
            // 82
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 12,
                'product_id' => 9,
            ],
            // 83
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 13,
                'product_id' => 9,
            ],
            // 84
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 9,
            ],
            // 85
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 9,
            ],
            // 86
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 9,
            ],
            // 87
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 17,
                'product_id' => 9,
            ],
            // 88
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 9,
            ],
            // 89
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 9,
            ],

            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 10
            // 90
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 6,
                'product_id' => 10,
            ],
            // 91
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 7,
                'product_id' => 10,
            ],
            // 92
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 8,
                'product_id' => 10,
            ],
            // 93
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 9,
                'product_id' => 10,
            ],
            // 94
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 10,
                'product_id' => 10,
            ],
            // 95
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 11,
                'product_id' => 10,
            ],
            // 96
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 12,
                'product_id' => 10,
            ],
            // 97
            [
                'product_variant_id' => 2,
                'product_variant_value_id' => 13,
                'product_id' => 10,
            ],
            // 98
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 10,
            ],
            // 99
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 10,
            ],
            // 100
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 10,
            ],
            // 101
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 17,
                'product_id' => 10,
            ],
            // 102
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 10,
            ],
            // 103
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 10,
            ],




            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 15
            // 104
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 15,
            ],
            // 105
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 15,
            ],
            // 106
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 15,
            ],
            // 107
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 15,
            ],
            // 108
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 15,
            ],


            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 16
            // 109
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 16,
            ],
            // 110
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 16,
            ],
            // 111
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 16,
            ],
            // 112
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 16,
            ],
            // 113
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 16,
            ],

            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 17
            // 114
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 17,
            ],
            // 115
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 17,
            ],
            // 116
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 17,
            ],
            // 117
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 17,
            ],
            // 118
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 17,
            ],


            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 19
            // 119
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 19,
            ],
            // 120
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 19,
            ],
            // 121
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 19,
            ],
            // 122
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 19,
            ],
            // 123
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 19,
            ],

            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 20
            // 124
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 20,
            ],
            // 125
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 20,
            ],
            // 126
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 20,
            ],
            // 127
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 20,
            ],
            // 128
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 20,
            ],


            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 21
            // 125
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 21,
            ],
            // 126
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 21,
            ],
            // 127
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 21,
            ],
            // 128
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 21,
            ],
            // 129
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 21,
            ],


            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 22
            // 130
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 21,
            ],
            // 131
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 21,
            ],
            // 132
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 21,
            ],
            // 133
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 21,
            ],
            // 134
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 21,
            ],


            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 25
            // 135
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 25,
            ],
            // 136
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 25,
            ],
            // 137
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 25,
            ],
            // 138
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 25,
            ],
            // 139
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 25,
            ],

            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 26
            // 140
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 25,
            ],
            // 141
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 25,
            ],
            // 142
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 25,
            ],
            // 143
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 25,
            ],
            // 144
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 25,
            ],


            ///////////////////////////////////////////////////////
            ///////////////////////////////////////////////////////

            // 27
            // 145
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 14,
                'product_id' => 25,
            ],
            // 146
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 15,
                'product_id' => 25,
            ],
            // 147
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 16,
                'product_id' => 25,
            ],
            // 148
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 19,
                'product_id' => 25,
            ],
            // 149
            [
                'product_variant_id' => 3,
                'product_variant_value_id' => 20,
                'product_id' => 25,
            ],


        ]);


        Schema::enableForeignKeyConstraints();
    }

}
