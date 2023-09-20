<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Company;
use App\Models\Polzovatel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(CompanyTableSeeder::class);
        $this->call(PolzovatelTableSeeder::class);
        Polzovatel::factory()->count(15)->create();
        Company::factory()->count(10)->create();

        $polzovatels = Polzovatel::all();
        Company::all()->each(function ($companies) use ($polzovatels){
            $companies->polzovatels()->attach(
              $polzovatels->random(random_int(1,3))->pluck('id')->toArray()
            );
        });
    }
}
