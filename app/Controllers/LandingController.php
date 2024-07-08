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
}
