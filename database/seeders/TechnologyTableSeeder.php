<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TechnologyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $techs = ['vue', 'laravel', 'bootstrap', 'tailwind'];

        foreach ($techs as $tech) {
            $newTech = new Technology();
            $newTech->name = $tech;
            $newTech->slug = Str::slug($tech, '-');
            $newTech->save();
        }
    }
}
