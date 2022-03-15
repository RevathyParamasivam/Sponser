<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

class ProfileController extends Controller
{
    public function index()    {  
        echo view('donation/header');  
        echo view('donation/profile');
        echo view('donation/footer');
    }      
    
}