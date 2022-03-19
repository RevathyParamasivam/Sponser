<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        //echo view('donation/header');
        echo view('donation/login');
        //echo view('donation/footer');
    }
}
