<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Law extends CI_Controller {
    public function index()
    {
        $this->load->view('law/index');
    }
}