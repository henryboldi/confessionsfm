<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Perfectcontroller extends MX_Controller {

function __construct() {
    parent::__construct();
}

function pushbots($message) {
    $this->load->library('PushBots');
    $pb = new PushBots();
    // Application ID
    $appID = '520132ee4deeae735d002d5c';
    // Application Secret
    $appSecret = '0a264a07ef266f14a1277be97d84f4d0';
    $pb->App($appID, $appSecret);
    // Notification msg
    $msg=$message;
    $pb->Alert($msg);
    $platforms= array(0,1);
    $pb->Platform($platforms);
    // Push it !
    $pb->Push();
}

}