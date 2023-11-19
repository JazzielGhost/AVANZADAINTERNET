<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Car;;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
  
    public function run(): void
    {
        Car::factory(25)
        ->create();
        /*
        $car = new Car();
        $car->name = 'Test Car';
        $car->description = 'Test description';
        $car->year = 2021;
        $car->save();
        */
    }
}
