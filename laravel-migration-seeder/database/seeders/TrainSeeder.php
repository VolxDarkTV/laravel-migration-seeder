<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTrain = new Train();

        $newTrain -> run_name = "Treno Torinese";
        $newTrain -> run_number = 3473821;
        $newTrain -> price = 11;
        $newTrain -> location_start = "Torino";
        $newTrain -> location_destination = "Milano";
        $newTrain -> start_time = "2021-01-01";
        $newTrain -> end_time = "2022-01-01";

        $newTrain -> save();
    }
}
