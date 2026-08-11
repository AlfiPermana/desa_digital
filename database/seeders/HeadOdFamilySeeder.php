<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\UserFactory;
use Database\Factories\HeadOfFamilyFactory;

class HeadOdFamilySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserFactory::new()->count(15)->create()->each(function ($user) {
            HeadOfFamilyFactory::new()->count(1)->create(['user_id' => $user->id]);
        });
    }
}
