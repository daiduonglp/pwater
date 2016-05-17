<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class address extends CI_Controller {
    public function index()
    {
        $this->load->view('address/index');
    }
}
