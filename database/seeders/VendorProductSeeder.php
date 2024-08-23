<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class VendorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // product 1, color: red
        for ($i = 1; $i <= 30; $i++) {
            DB::table('vendor_product')->insert([
                [
                    'product_id' => 1,
                    'vendor_id' => rand(1, 34),
                    'price' => 1000000,
                    'color' => 'red'
                ]
            ]);
        }

        // product 1, color: green
        for ($i = 1; $i <= 30; $i++) {
            DB::table('vendor_product')->insert([
                [
                    'product_id' => 2,
                    'vendor_id' => rand(1, 34),
                    'price' => 2000000,
                    'color' => 'green'
                ]
            ]);
        }

        // product 1, color: yellow
        for ($i = 1; $i <= 30; $i++) { 
            DB::table('vendor_product')->insert([
                [
                    'product_id' => 3,
                    'vendor_id' => rand(1, 34),
                    'price' => 3000000,
                    'color' => 'yellow'
                ]
            ]);
        }
    }
}
