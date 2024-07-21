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
        // $data;
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

    public function summary($nat){
        $data["nation"] = $nat;

        if($nat === "Indonesia"){
            $data["population"] = "275,773,800";
            $data["ttlland"] = "1,892,556";
            $data["totalHighway"] = "548,097";
            $data["GDP"] = "4,778";
            $data["PPP"] = "19,588,089,9";
            $data["GDPppp"] = "12,410";
        }else{
            $data["population"] = "N/a";
            $data["ttlland"] = "N/a";
            $data["totalHighway"] = "N/a";
            $data["GDP"] = "N/a";
            $data["PPP"] = "N/a";
            $data["GDPppp"] = "N/a";
        }
        return view('/landingpage/summary', $data);

    }
}
