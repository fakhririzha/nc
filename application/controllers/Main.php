<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $var = [
            'title' => 'ND Collection',
        ];
        $this->load->view('frontpage/index', $var);
    }
}
