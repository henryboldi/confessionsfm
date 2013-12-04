<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Statics extends MX_Controller {

function __construct() {
    parent::__construct();
}

function privacy_policy() {
        
        $data['module'] = "statics";
        $data['view_file'] = "privacy";
        $data['title'] = "Privacy Policy";
        echo Modules::run('templates/general', $data);
}

function terms() {
        $data['module'] = "statics";
        $data['view_file'] = "terms";
        $data['title'] = "Terms";
        echo Modules::run('templates/general', $data);
}



}