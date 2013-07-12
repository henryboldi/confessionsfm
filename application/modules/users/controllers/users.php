<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MX_Controller {

    function create() {
        
        $data = $this->get_data_from_post(); //creating a new
        
        
        $data['module'] = "users";
        $data['view_file'] = "create_user";
        
        $this->load->view('create_user', $data); 
    
    }
    
     function get_data_from_post() {
        $data['username'] = $this->input->post('username', TRUE);
        $data['pword'] = $this->input->post('pword', TRUE);
        return $data;
    }
    
        function submit() {
    

		$this->load->library('form_validation');
                //checks
                $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|xss_clean|max_length[30]');
                $this->form_validation->set_rules('pword', 'Pword', 'required|min_length[3]|xss_clean|max_length[240]');
		
                
               
                
                
                if ($this->form_validation->run($this) == FALSE) {
                    //mistake
                    $this->create();
		}
		else
		{
                    //success
                    $data = $this->get_data_from_post();
                    $data['pword'] = Modules::run('security/make_hash', $data['pword']);
                                                                  
                    $this->_insert($data);
                    redirect('users/create');
                     
                    
		}
        }
        
        
    function pword_check($pword) {
        
        $name = $this->input->post('name', TRUE);
        $pword = Modules::run('security/make_hash', $pword);
      
        $this->load->model('mdl_users');
        $result = $this->mdl_users->pword_check($name, $pword);
                
		if ($result == FALSE)
		{
			$this->form_validation->set_message('pword_check', 'WRONG.');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
    
    
    
    
    
    

function get($order_by){
    $this->load->model('mdl_users');
    $query = $this->mdl_users->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) {
    $this->load->model('mdl_users');
    $query = $this->mdl_users->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id){
    $this->load->model('mdl_users');
    $query = $this->mdl_users->get_where($id);
    return $query;
}

function get_where_custom($col, $value) {
    $this->load->model('mdl_users');
    $query = $this->mdl_users->get_where_custom($col, $value);
    return $query;
}

function _insert($data){
    $this->load->model('mdl_users');
    $this->mdl_users->_insert($data);
}

function _update($id, $data){
    $this->load->model('mdl_users');
    $this->mdl_users->_update($id, $data);
}

function _delete($id){
    $this->load->model('mdl_users');
    $this->mdl_users->_delete($id);
}

function count_where($column, $value) {
    $this->load->model('mdl_users');
    $count = $this->mdl_users->count_where($column, $value);
    return $count;
}

function get_max() {
    $this->load->model('mdl_users');
    $max_id = $this->mdl_users->get_max();
    return $max_id;
}

function _custom_query($mysql_query) {
    $this->load->model('mdl_users');
    $query = $this->mdl_users->_custom_query($mysql_query);
    return $query;
}

}