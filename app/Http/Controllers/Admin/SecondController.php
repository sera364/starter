<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SecondController extends Controller

{
    public function __construct(){
        $this -> middleware('auth')->except('showString1');
    }
    public function showString(): string
    {
        return 'static string';
    }

    public function showString1(): string
    {
        return 'nice string';
    }

    public function showString2(): string
    {
        return 'lol string';
    }

}
