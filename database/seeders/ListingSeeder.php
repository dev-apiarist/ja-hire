<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user = User::factory()->create([
            'name' => 'Kenni Leslie',
            'email' => 'admin@ja.hire.com'
        ]);
        Listing::factory(10)->create(['user_id' => $user->id]);
    }
}
