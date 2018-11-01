<?php

use App\Models\Seller;
use Illuminate\Database\Seeder;

/**
 * Class SellersTableSeeder
 */
class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Seller::create([
            'name' => 'Maxi'
        ]);
        Seller::create([
            'name' => 'MOL'
        ]);
        Seller::create([
            'name' => 'Trnava Promet'
        ]);
        Seller::create([
            'name' => 'DM'
        ]);
        Seller::create([
            'name' => 'Lilly'
        ]);
        Seller::create([
            'name' => 'Other'
        ]);
    }
}
