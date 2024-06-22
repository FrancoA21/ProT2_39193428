<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('front/head_app');
        echo view('front/navbar_app');
        echo view('front/body_app');
        echo view('front/footer_app');


    }

    public function principal()
    {
        echo view('front/head_app');
        echo view('front/navbar_app');
        echo view('front/body_app');
        echo view('front/footer_app');
       
    }

    public function quienes_somos()
    {
        echo view('front/navbar_app');
        echo view('front/quienes_somos');
        echo view('front/footer_app');

    }

    public function registro()
    {
        echo view('front/navbar_app');
        echo view('front/registro');
        echo view('front/footer_app');

    }

    public function logIn()
    {
        echo view('front/navbar_app');
        echo view('front/logIn');
        echo view('front/footer_app');

    }
}
 