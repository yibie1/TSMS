<?php


class Cexaminer extends Controller
{
    public function __construct()
    {
        $this->examinerModel = $this->model('Examiner');
        $this->userModel = $this->model('User');

        if(!$this->isLoggedIn() && $_SESSION['role'] != 'examiner'){
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
            'title' => 'Examiner'
        ];

        $this->view('examiner/index', $data);
    }
}