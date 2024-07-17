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

    public function programDetail($id){
        // $data;
        $data["id"] = $id;
        return view('landingpage/programDetail', $data);   
    }

    public function publications(){
        return view('landingpage/publications');   
    }

    public function publicationDetail($id){
        $data;
        $data["id"] = $id;
        return view('landingpage/publicationDetail', $data);  
    }

    public function news(){
        return view('landingpage/news');   
    }

    public function updates(){
        return view('landingpage/news');   
    }

    public function events(){
        return view('landingpage/events');   
    }
}
