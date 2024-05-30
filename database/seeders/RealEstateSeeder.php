<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RealEstate;

class RealEstateSeeder extends Seeder
{
    public function run()
    {
        RealEstate::create([
            'company_id' => 1,
            'brand_id' => 1,
            'title' => 'Luxury Apartment',
            'description' => 'A beautiful luxury apartment in the city center.',
            'price' => 1200000,
            'currency_code' => 'USD',
            'view_counter' => 100,
            'avail_date' => now(),
            'country_id' => 1,
            'city_id' => 1,
            'restrict_id' => 1,
            'street_id' => 1,
            'postal_code' => '12345',
            'adress' => 'Main Street 123',
            'full_adress' => 'Main Street 123, City Center',
            'lat' => 40.7128,
            'lon' => -74.0060,
            'provider_user_id' => 1,
            'photographer_user_id' => 1,
        ]);
    }
}

