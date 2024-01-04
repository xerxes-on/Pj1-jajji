<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        if(isset($_GET['page'])){
            return view('pages.' . $_GET['page']);
        }else{
            return view('pages.home');
        }
    }
}
