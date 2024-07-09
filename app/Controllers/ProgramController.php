<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ProgramController extends BaseController
{
    public function index()
    {
        $prog = model('ProgramModel');
        $results = $prog->findAll();

        print_r($results);
    }

    public function getId($id){
        $prog = model('ProgramModel');
        $article = model('ArticleModel');

        $detailProg = $prog->where('id', $id)->find();
        $detailArt = $article->where('program_id', $id)->find();

        print_r($detailProg);
        echo "<br><br>";
        print_r($detailArt);
    }
}
