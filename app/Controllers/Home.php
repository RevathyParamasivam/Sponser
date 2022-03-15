<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('donation/donar_registration');
    }
}
