<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Did_user_gasp extends MX_Controller {

function __construct() {
    parent::__construct();
}


function add_user_gasp($gasp_id, $user_id) {
    $data['gasp_id'] = $gasp_id;
    $data['user_id'] = $user_id;

    $this->_insert($data);

}
          

function index() {
    $data = $this->did_user_gasp(1, 1);
    print_r($data);
}



function did_user_gasp($gasp_id, $user_id){
    $data = $this->get_data_from_db($gasp_id);
    return $data;
}

    function get_data_from_db($gasp_id) {
        $query = $this->get_where_custom('gasp_id', $gasp_id);
        foreach($query->result() as $row) {
            $data['gasp_id'] = $row->gasp_id;
            $data['user_id'] = $row->user_id; 
        }
        if (isset($data)) {
        return $data;
        }
    }

function get($order_by){
    $this->load->model('mdl_did_user_gasp');
    $query = $this->mdl_did_user_gasp->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) {
    $this->load->model('mdl_did_user_gasp');
    $query = $this->mdl_did_user_gasp->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id){
    $this->load->model('mdl_did_user_gasp');
    $query = $this->mdl_did_user_gasp->get_where($id);
    return $query;
}

function get_where_custom($col, $value) {
    $this->load->model('mdl_did_user_gasp');
    $query = $this->mdl_did_user_gasp->get_where_custom($col, $value);
    return $query;
}

function _insert($data){
    $this->load->model('mdl_did_user_gasp');
    $this->mdl_did_user_gasp->_insert($data);
}

function _update($id, $data){
    $this->load->model('mdl_did_user_gasp');
    $this->mdl_did_user_gasp->_update($id, $data);
}

function _delete($id){
    $this->load->model('mdl_did_user_gasp');
    $this->mdl_did_user_gasp->_delete($id);
}

function count_where($column, $value) {
    $this->load->model('mdl_did_user_gasp');
    $count = $this->mdl_did_user_gasp->count_where($column, $value);
    return $count;
}

function get_max() {
    $this->load->model('mdl_did_user_gasp');
    $max_id = $this->mdl_did_user_gasp->get_max();
    return $max_id;
}

function _custom_query($mysql_query) {
    $this->load->model('mdl_did_user_gasp');
    $query = $this->mdl_did_user_gasp->_custom_query($mysql_query);
    return $query;
}

}