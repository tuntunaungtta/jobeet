<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top extends CI_Controller {

    public function index()
    {
        $this->load->view('header');
        $this->load->view('top/list');
        $this->load->view('footer');
    }

    public function setup()
    {
        $this->load->view('header');
        $this->load->view('top/setup');
        $this->load->view('footer');
    }
}
