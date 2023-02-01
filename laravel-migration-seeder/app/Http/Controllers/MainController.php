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
        return view('layouts/welcome', $data);
    }
}
