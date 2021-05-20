<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(): string
    {
        return 'sara galal';
    }

    public function getIndex(){
//        $data=[];
////        $data['id'] =5;
//        $data['name']='sara galal';
//        $obj= new \stdClass();
//        $obj->name = 'sara';
//        $obj->age = 25;
//        $obj->id = 3;


        $omar=['dalal','sara'];
        return view ('welcome',compact('omar'));
    }
}
