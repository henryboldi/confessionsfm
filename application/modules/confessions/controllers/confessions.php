<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Confessions extends MX_Controller {

function __construct() {
    parent::__construct();
}

    function create() {
        
        $data = $this->get_data_from_post(); //creating a new

        
        
        $data['module'] = "confessions";
        $data['view_file'] = "post_confession_form";
        
        $this->load->view('post_confession_form', $data); 
    
    }
    
     function get_data_from_post() {
        $data['confession'] = $this->input->post('confession', TRUE); 
        $data['confesseddatetime'] = $this->input->post('confesseddatetime', TRUE);
        $data['pageid'] = $this->input->post('pageid', TRUE);
        return $data;
    }
    
 
    
    
        function submit() {
    

		$this->load->library('form_validation');
                //checks
                $this->form_validation->set_rules('confession', 'Confession', 'required|min_length[20]|xss_clean|max_length[500]');
		
                
                
                
                
                if ($this->form_validation->run() == FALSE) {
                    //mistake
                    $this->create();
		}
		else
		{
                    //success
                    $data = $this->get_data_from_post();
                                                                  
                    $this->_insert($data);
                    redirect('confessions/create');
                     
                    
		}
        }



function get($order_by){
    $this->load->model('mdl_confessions');
    $query = $this->mdl_confessions->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) {
    $this->load->model('mdl_confessions');
    $query = $this->mdl_confessions->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id){
    $this->load->model('mdl_confessions');
    $query = $this->mdl_confessions->get_where($id);
    return $query;
}

function get_where_custom($col, $value) {
    $this->load->model('mdl_confessions');
    $query = $this->mdl_confessions->get_where_custom($col, $value);
    return $query;
}

function _insert($data){
    $this->load->model('mdl_confessions');
    $this->mdl_confessions->_insert($data);
}

function _update($id, $data){
    $this->load->model('mdl_confessions');
    $this->mdl_confessions->_update($id, $data);
}

function _delete($id){
    $this->load->model('mdl_confessions');
    $this->mdl_confessions->_delete($id);
}

function count_where($column, $value) {
    $this->load->model('mdl_confessions');
    $count = $this->mdl_confessions->count_where($column, $value);
    return $count;
}

function get_max() {
    $this->load->model('mdl_confessions');
    $max_id = $this->mdl_confessions->get_max();
    return $max_id;
}

function _custom_query($mysql_query) {
    $this->load->model('mdl_confessions');
    $query = $this->mdl_confessions->_custom_query($mysql_query);
    return $query;
}

}