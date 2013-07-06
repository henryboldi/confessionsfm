<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends MX_Controller {

    function create() {
        
        $data = $this->get_data_from_post(); //creating a new
        
        
        $data['module'] = "pages";
        $data['view_file'] = "create_page_form";
        
        $this->load->view('create_page_form', $data); 
    
    }
    
     function get_data_from_post() {
        $data['name'] = $this->input->post('name', TRUE);
        return $data;
    }
    
        function submit() {
    

		$this->load->library('form_validation');
                //checks
                $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|xss_clean|max_length[45]');
		
                
                
                
                
                if ($this->form_validation->run() == FALSE) {
                    //mistake
                    $this->create();
		}
		else
		{
                    //success
                    $data = $this->get_data_from_post();
                                                                  
                    $this->_insert($data);
                    redirect('pages/create');
                     
                    
		}
        }
    
    
    
    
    
    

function get($order_by){
    $this->load->model('mdl_pages');
    $query = $this->mdl_pages->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) {
    $this->load->model('mdl_pages');
    $query = $this->mdl_pages->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id){
    $this->load->model('mdl_pages');
    $query = $this->mdl_pages->get_where($id);
    return $query;
}

function get_where_custom($col, $value) {
    $this->load->model('mdl_pages');
    $query = $this->mdl_pages->get_where_custom($col, $value);
    return $query;
}

function _insert($data){
    $this->load->model('mdl_pages');
    $this->mdl_pages->_insert($data);
}

function _update($id, $data){
    $this->load->model('mdl_pages');
    $this->mdl_pages->_update($id, $data);
}

function _delete($id){
    $this->load->model('mdl_pages');
    $this->mdl_pages->_delete($id);
}

function count_where($column, $value) {
    $this->load->model('mdl_pages');
    $count = $this->mdl_pages->count_where($column, $value);
    return $count;
}

function get_max() {
    $this->load->model('mdl_pages');
    $max_id = $this->mdl_pages->get_max();
    return $max_id;
}

function _custom_query($mysql_query) {
    $this->load->model('mdl_pages');
    $query = $this->mdl_pages->_custom_query($mysql_query);
    return $query;
}

}