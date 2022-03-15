<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

class DashboardController extends Controller
{
    
    public function index()    {
        echo view('donation/header');  
        echo view('donation/dashboard');
        echo view('donation/footer');
    }  
    public function profile()
    {
       // echo view('donation/header');  
        return view('donation/profile');
        //echo view('donation/footer');
    }    
    
}