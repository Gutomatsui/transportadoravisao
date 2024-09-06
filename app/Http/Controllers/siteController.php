<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index(){
      return view('home.index',['title' =>'']);   
    }

    public function sobre(){
      return view('sobre.index',['title' =>'A Empresa']);
    }

    public function sassmaq(){
      return view('sassmaq.index',['title' => 'SASSMAQ']);
    }
}
