<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomController extends Controller
{
    public function index($id){
        echo "${id} returned from controller";
    }
}
