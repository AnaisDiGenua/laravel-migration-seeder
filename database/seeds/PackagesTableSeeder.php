<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Package;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 100; $i++) {
            $package = new Package();
            $package->city = $faker->city();
            $package->price = $faker->randomFloat(2, 200, 5000);
            $package->start_day = $faker->dateTimeThisYear();
            $package->end_day = $faker->dateTimeThisYear();
            $package->description =  $faker->paragraph(2);
            $package->save();
        }
    }
}
