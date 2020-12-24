<?php


class Cmahibrat extends Controller
{
    public function __construct()
    {
        $this->mahiberatModel = $this->model('Mahibrat');
        $this->userModel = $this->model('User');
        if(!$this->isLoggedIn() && $_SESSION['role'] != "mahiberat"){
            redirect('login');
        }
    }
        public function isLoggedIn()
        {
            if (isset($_SESSION['user_id'])) {
                return true;
            } else {
                return false;
            }
        }

    public function index()
    {

        $data = [
            'title' => 'Mahiberat'
        ];

        $this->view('examiner/index', $data);
    }
}