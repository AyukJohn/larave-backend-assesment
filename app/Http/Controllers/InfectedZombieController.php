<?php

namespace App\Http\Controllers;

use App\Http\Repositories\infectedZombie;
use Illuminate\Http\Request;

class InfectedZombieController extends Controller
{
    

    public $infected;


    public function __construct(infectedZombie $infected)
    {
        $this->infected = $infected;
    }



    public function Infected(){
        return $this->infected->infected();
    }

    public function notInfectd(){
        return $this->infected->notInfected();
    }


    public function createInfected(Request  $request){
        return $this->infected->createInfected($request);
    }



    public function upDateStatus(Request  $request,$id){
        return $this->infected->upDateStatus($request,$id);
    }

}
