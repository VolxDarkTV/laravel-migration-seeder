<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
class MainController extends Controller
{
    public function train(){
        $trains = Train::all();
        $data = [
            'trains' => $trains
        ];
        return view('pages/home', $data);
    }

    public function add(){

        $newTrain = new Train();

        $newTrain -> run_name = "Treno Torinese";
        $newTrain -> run_number = 3473821;
        $newTrain -> price = 11;
        $newTrain -> location_start = "Torino";
        $newTrain -> location_destination = "Milano";
        $newTrain -> start_time = "10:30";
        $newTrain -> end_time = "11:00";
        
        $newTrain -> save();

        return view('pages/home', $data);
    }
}
