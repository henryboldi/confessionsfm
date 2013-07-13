<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Template extends MX_Controller {
    
    function feed() {
        $this->load->view('feed');
    }
}
