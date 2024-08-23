<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vendor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('vendors')->insert([
            [
                'id' => 1,
                'name' => 'VendorLevel_1_1',
                'parent_id' => 0,
                'interest_rate' => 0.5,
                'level' => 1
            ],
            [
                'id' => 2,
                'name' => 'VendorLevel_1_2',
                'parent_id' => 0,
                'interest_rate' => 0.5,
                'level' => 1
            ],

            //-----------------
            [
                'id' => 3,
                'name' => 'VendorLevel_2_1',
                'parent_id' => 1,
                'interest_rate' => 0.4,
                'level' => 2
            ],
            [
                'id' => 4,
                'name' => 'VendorLevel_2_2',
                'parent_id' => 1,
                'interest_rate' => 0.4,
                'level' => 2
            ],
            [
                'id' => 5,
                'name' => 'VendorLevel_2_3',
                'parent_id' => 2,
                'interest_rate' => 0.4,
                'level' => 2
            ],
            [
                'id' => 6,
                'name' => 'VendorLevel_2_4',
                'parent_id' => 2,
                'interest_rate' => 0.4,
                'level' => 2
            ],
            //-----------------
            [
                'id' => 7,
                'name' => 'VendorLevel_3_1',
                'parent_id' => 3,
                'interest_rate' => 0.3,
                'level' => 3
            ],
            [
                'id' => 8,
                'name' => 'VendorLevel_3_2',
                'parent_id' => 3,
                'interest_rate' => 0.3,
                'level' => 3
            ],

            [
                'id' => 9,
                'name' => 'VendorLevel_3_3',
                'parent_id' => 4,
                'interest_rate' => 0.3,
                'level' => 3
            ],
            [
                'id' => 10,
                'name' => 'VendorLevel_3_4',
                'parent_id' => 4,
                'interest_rate' => 0.3,
                'level' => 3
            ],

            [
                'id' => 11,
                'name' => 'VendorLevel_3_5',
                'parent_id' => 5,
                'interest_rate' => 0.3,
                'level' => 3
            ],
            [
                'id' => 12,
                'name' => 'VendorLevel_3_6',
                'parent_id' => 5,
                'interest_rate' => 0.3,
                'level' => 3
            ],

            [
                'id' => 13,
                'name' => 'VendorLevel_3_7',
                'parent_id' => 6,
                'interest_rate' => 0.3,
                'level' => 3
            ],
            [
                'id' => 14,
                'name' => 'VendorLevel_3_8',
                'parent_id' => 6,
                'interest_rate' => 0.3,
                'level' => 3
            ],
            //-----------------

            [
                'id' => 15,
                'name' => 'VendorLevel_4_1',
                'parent_id' => 7,
                'interest_rate' => 0.2,
                'level' => 4
            ],
            [
                'id' => 16,
                'name' => 'VendorLevel_4_2',
                'parent_id' => 7,
                'interest_rate' => 0.2,
                'level' => 4
            ],

            [
                'id' => 17,
                'name' => 'VendorLevel_4_3',
                'parent_id' => 8,
                'interest_rate' => 0.2,
                'level' => 4
            ],
            [
                'id' => 18,
                'name' => 'VendorLevel_4_4',
                'parent_id' => 8,
                'interest_rate' => 0.2,
                'level' => 4
            ],

            [
                'id' => 19,
                'name' => 'VendorLevel_4_5',
                'parent_id' => 9,
                'interest_rate' => 0.2,
                'level' => 4
            ],
            [
                'id' => 20,
                'name' => 'VendorLevel_4_6',
                'parent_id' => 9,
                'interest_rate' => 0.2,
                'level' => 4
            ],

            [
                'id' => 21,
                'name' => 'VendorLevel_4_7',
                'parent_id' => 10,
                'interest_rate' => 0.2,
                'level' => 4
            ],
            [
                'id' => 22,
                'name' => 'VendorLevel_4_8',
                'parent_id' => 10,
                'interest_rate' => 0.2,
                'level' => 4
            ],

            [
                'id' => 23,
                'name' => 'VendorLevel_4_9',
                'parent_id' => 11,
                'interest_rate' => 0.2,
                'level' => 4
            ],
            [
                'id' => 24,
                'name' => 'VendorLevel_4_10',
                'parent_id' => 11,
                'interest_rate' => 0.2,
                'level' => 4
            ],

            [
                'id' => 25,
                'name' => 'VendorLevel_4_11',
                'parent_id' => 12,
                'interest_rate' => 0.2,
                'level' => 4
            ],
            [
                'id' => 26,
                'name' => 'VendorLevel_4_12',
                'parent_id' => 12,
                'interest_rate' => 0.2,
                'level' => 4
            ],

            [
                'id' => 27,
                'name' => 'VendorLevel_4_13',
                'parent_id' => 13,
                'interest_rate' => 0.2,
                'level' => 4
            ],
            [
                'id' => 28,
                'name' => 'VendorLevel_4_14',
                'parent_id' => 13,
                'interest_rate' => 0.2,
                'level' => 4
            ],

            [
                'id' => 29,
                'name' => 'VendorLevel_4_15',
                'parent_id' => 14,
                'interest_rate' => 0.2,
                'level' => 4
            ],
            [
                'id' => 30,
                'name' => 'VendorLevel_4_16',
                'parent_id' => 14,
                'interest_rate' => 0.2,
                'level' => 4
            ],
            //-----------------
            [
                'id' => 31,
                'name' => 'VendorLevel_5_1',
                'parent_id' => 15,
                'interest_rate' => 0.1,
                'level' => 5
            ],
            [
                'id' => 32,
                'name' => 'VendorLevel_5_2',
                'parent_id' => 15,
                'interest_rate' => 0.1,
                'level' => 5
            ],

            [
                'id' => 33,
                'name' => 'VendorLevel_5_3',
                'parent_id' => 16,
                'interest_rate' => 0.1,
                'level' => 5
            ],
            [
                'id' => 34,
                'name' => 'VendorLevel_5_4',
                'parent_id' => 16,
                'interest_rate' => 0.1,
                'level' => 5
            ],

        ]);
    }
        




        
}
