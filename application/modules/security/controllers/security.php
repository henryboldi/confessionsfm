<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Security extends MX_Controller {

function __construct() {
    parent::__construct();
}

//Call some functions here. Don't forget to change the class name. Get rollin'

    function make_hash($password) {
        $safe_pass = sha1($password);
    }



}