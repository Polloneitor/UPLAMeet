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
    public function ver_realizadas(){

        echo view('header.php');
        echo view('navbar.php');
        echo view('realizadas.php');
        echo view('footer.php');
  
    }
    public function ver_acta(){

        echo view('header.php');
        echo view('navbar.php');
        echo view('acta.php');
        echo view('footer.php');
  
    }
    public function ver_comentarios(){

        echo view('header.php');
        echo view('navbar.php');
        echo view('comentarios.php');
        echo view('footer.php');
  
    }

    public function ver_comentarios0(){

        echo view('header.php');
        echo view('navbar.php');
        echo view('comentarios0.php');
        echo view('footer.php');
  
    }

    public function ver_creadas(){

        echo view('header.php');
        echo view('navbar.php');
        echo view('creadas.php');
        echo view('footer.php');
  
    }
}
 