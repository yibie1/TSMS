<?php


class Cmanager extends Controller
{
    public function __construct()
    {
        $this->managerModel = $this->model('Manager');
        $this->userModel = $this->model('User');
        if(!$this->isLoggedIn() && $_SESSION['role'] != "manager"){
            redirect('login');
        }

    }

   public function isLoggedIn(){
            if(isset($_SESSION['user_id'])){
                return true;
            } else {
                return false;
            }
        }

    public function index()
    {

        $data = [
            'title' => 'Manger'
        ];

        $this->view('manager/index', $data);
    }
}