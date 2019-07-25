<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Top extends CI_Controller {

    public function index()
    {
        $this->load->view('top/list');
    }

    public function setup()
    {
        $this->load->view('top/setup');
    }
}
