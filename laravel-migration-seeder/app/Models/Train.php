<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    use HasFactory;

    private $id;
    private $agency_name;
    private $phone_number;
    private $address;
    private $description;

    public function getId(){
        return $this -> id;
    }
    public function setId($id){
        $this -> id = $id;
    }
    public function getAgency_name(){
        return $this -> agency_name;
    }
    public function setAgency_name($agency_name){
        $this -> agency_name = $agency_name;
    }
    public function getPhone_number(){
        return $this -> phone_number;
    }
    public function setPhone_number($phone_number){
        $this -> phone_number = $phone_number;
    }
    public function getAddress(){
        return $this -> address;
    }
    public function setAddress($address){
        $this -> address = $address;
    }
    public function getDescription(){
        return $this -> description;
    }
    public function setDescription($description){
        $this -> description = $description;
    }
}
