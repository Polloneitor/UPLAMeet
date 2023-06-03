<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index.php');
    }

    public function verapp(){

        echo view('header.php');
        echo view('navbar.php');
        echo view('pendientes.php');
        echo view('footer.php');
  
    }
}
 