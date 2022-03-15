<?php 
namespace App\Controllers;
//use App\Models\SignupModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function __construct(){
        //$this->login = new SignupModel();       
    }
    public function index()    {  
        return view('donation/login');
    }      
    //check user is exist or not
    public function login(){
        
        if($_POST['username']=='1234567890' && $_POST['password']=='donar')
        {
         return redirect()->to(base_url('DashboardController'));
        }
        else
        {
            return view('donation/login');
        } 
     }
}