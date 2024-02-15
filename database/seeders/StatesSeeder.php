<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $states = [
            'Andhra Pradesh', 'Andaman and Nicobar Islands', 'Arunachal Pradesh', 'Assam',
            'Bihar', 'Chandigarh', 'Chhattisgarh', 'Dadar and Nagar Haveli', 'Daman and Diu',
            'Delhi', 'Lakshadweep', 'Puducherry', 'Goa', 'Gujarat', 'Haryana', 'Himachal Pradesh',
            'Jammu and Kashmir', 'Jharkhand', 'Karnataka', 'Kerala', 'Madhya Pradesh', 'Maharashtra',
            'Manipur', 'Meghalaya', 'Mizoram', 'Nagaland', 'Odisha', 'Punjab', 'Rajasthan', 'Sikkim',
            'Tamil Nadu', 'Telangana', 'Tripura', 'Uttar Pradesh', 'Uttarakhand', 'West Bengal',
        ];

        foreach ($states as $state) {
            DB::table('states')->insert(['name' => $state]);
        }
    }
}
