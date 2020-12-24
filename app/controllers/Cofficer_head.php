<?php


class Cofficer_head extends Controller
{
    public function __construct()
    {
        $this->officer_headModel = $this->model('Officer_head');
        $this->userModel = $this->model('User');


    }

    public function index()
    {

        $data = [
            'title' => 'Officer head'
        ];

        $this->view('examiner/index', $data);
    }
}