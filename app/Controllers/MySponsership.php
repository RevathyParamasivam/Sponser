<?php

namespace App\Controllers;

class MySponsership extends BaseController
{
    public function index()
    {
        echo view('donation/header');
        echo view('donation/mysponsership');
        echo view('donation/footer');
    }
}
