<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LandingController extends BaseController
{
    public function index()
    {
        return view('landingpage/landingpage');
    }

    public function program(){
        return view('landingpage/program');   
    }

    public function publications(){
        return view('landingpage/publications');   
    }
}
