<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index.php');
    }

    public function verapp(){

        return view('header.php')
        .view('navbar.php')
        .view('pendientes.php')
        .view('footer.php');
  
    }
    public function ver_realizadas(){

        return view('header.php')
        .view('navbar.php')
        .view('realizadas.php')
        .view('footer.php');
  
    }
    public function ver_acta(){

        return view('header.php')
        .view('navbar.php')
        .view('acta.php')
        .view('footer.php');
  
    }
    public function ver_comentarios(){

        return view('header.php')
        .view('navbar.php')
        .view('comentarios.php')
        .view('footer.php');
  
    }

    public function ver_comentarios0(){

        return view('header.php')
        .view('navbar.php')
        .view('comentarios0.php')
        .view('footer.php');
  
    }
    

    public function agregar_comentario(){

        echo view('header.php');
        echo view('navbar.php');
        echo view('mensaje.php');

        echo view('comentarios1.php');
        echo view('footer.php');
  
    }

    public function ver_creadas(){

        echo view('header.php');
        echo view('navbar.php');
        echo view('creadas.php');
        echo view('footer.php');
  
    }

    public function ver_creadas1(){

        echo view('header.php');
        echo view('navbar.php');
        echo view('mensaje1.php');

        echo view('creadas.php');
        echo view('footer.php');
  
    }


    public function ver_creadas2(){

        echo view('header.php');
        echo view('navbar.php');
        echo view('mensaje2.php');

        echo view('creadas.php');
        echo view('footer.php');
  
    }

    public function ver_perfil(){

        echo view('header.php');
        echo view('navbar.php');
        echo view('perfil.php');
        echo view('footer.php');
  
    }

    public function actualizar_acta(){

        echo view('header.php');
        echo view('navbar.php');
        echo view('actualizar_acta.php');
        echo view('footer.php');
  
    }

    public function crear_reunion(){

        echo view('header.php');
        echo view('navbar.php');
        echo view('crear_reunion.php');
        echo view('footer.php');
  
    }


    public function agregar_invitados(){

        echo view('header.php');
        echo view('navbar.php');
        echo view('agregar_invitados.php');
        echo view('footer.php');
  
    }

    public function volver_crear(){

        echo view('header.php');
        echo view('navbar.php');
        echo view('mensaje3.php');

        echo view('crear_reunion.php');
        echo view('footer.php');
  
    }
}
 