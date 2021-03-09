<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ThingsControllers extends Controller
{
    private $data = [
        1 => 'thing #1',
        2 => 'thing #2',
        3 => 'thing #3',
        4 => 'thing #4',
        5 => 'thing #5',
        6 => 'thing #6'

    ];


   /*public function __invoke($any=null){
       var_dump("I'am from controller.add param:".$any);
       //TODO: Implement __invoke() method.
   }*/

    public function index(){
        var_dump($this->data);
    }
    public function show($id){
        dump($this->data[$id]);
    }
    public function stroe(){
        var_dump($this->data);
    }
    public function update(){
        var_dump($this->data);
    }
    public function destroy(){
        var_dump($this->data);
    }

}
