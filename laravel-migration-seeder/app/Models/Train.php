<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    public $timestamps = false;

    private $id;
    private $run_name;
    private $run_number;
    private $price;
    private $location_start;
    private $location_destination;
    private $start_time;
    private $end_time;

    public function getId(){
        return $this -> id;
    }
    public function setId($id){
        $this -> id = $id;
    }
    public function getRun_name(){
        return $this -> run_name;
    }
    public function setRun_name($run_name){
        $this -> run_name = $run_name;
    }
    public function getRun_number(){
        return $this -> run_number;
    }
    public function setRun_number($run_number){
        $this -> run_number = $run_number;
    }
    public function getPrice(){
        return $this -> price;
    }
    public function setPrice($price){
        $this -> price = $price;
    }
    public function getLocation_start(){
        return $this -> location_start;
    }
    public function setLocation_start($location_start){
        $this -> location_start = $location_start;
    }
    public function getLocation_destination(){
        return $this -> location_destination;
    }
    public function setLocation_destination($location_destination){
        $this -> location_destination = $location_destination;
    }
    public function getStart_time(){
        return $this -> start_time;
    }
    public function setStart_time($start_time){
        $this -> start_time = $start_time;
    }
    public function getEnd_time(){
        return $this -> end_time;
    }
    public function setEnd_time($end_time){
        $this -> end_time = $end_time;
    }
}
