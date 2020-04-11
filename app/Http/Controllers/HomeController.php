<?php

namespace App\Http\Controllers;

use App\Fees;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Matthias_Kamau.welcome');
    }
    public function display()
    {
        $fees = Fees::has('students')->get();
        return view('Matthias_Kamau.feepayments')->with('fees',$fees);
    }
}