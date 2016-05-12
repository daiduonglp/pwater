<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class contract extends CI_Controller {
    public function index()
    {
        $this->load->view('contract/index');
    }
}
