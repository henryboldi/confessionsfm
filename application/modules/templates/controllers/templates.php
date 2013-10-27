<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templates extends MX_Controller {
    
    function general($data) {
        $this->load->view('general', $data);
    }
    
    function index() {
        $this->load->view('index');
    }
}
