<?php 
namespace App\Controllers;
use CodeIgniter\Controller;

class NewSponser extends Controller
{
    public function index()    {  
       
       echo view('donation/donar_registration');
       
    }      
    
}