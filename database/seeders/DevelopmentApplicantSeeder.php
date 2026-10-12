<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Development;
use App\Models\User;
use App\Models\DevelopmentApplicant;

class DevelopmentApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $developments = Development::all();
        $users = User::all();

        foreach ($developments as $development) {
            foreach ($users as $user) {
                DevelopmentApplicant::factory()->create([
                    'development_id' => $development->id,
                    'user_id' => $user->id,
                ]);
            }
        }
    }
}
