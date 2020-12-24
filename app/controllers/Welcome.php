<?php
  class Welcome extends Controller{
    public function __construct(){
      if(isset($_SESSION['user_id'])){
        redirect('user');
      }
    }

    public function index(){
      $this->view('welcome', ['title' => 'Welcome']);
    }
  }