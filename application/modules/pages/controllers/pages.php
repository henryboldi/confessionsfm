<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends MX_Controller {
    
    function index() {
        
        $this->load->model('mdl_pages');
       
        $data['query'] = $this->mdl_pages->get('id');
       
        $data['module'] = "pages";
        $data['view_file'] = "display";
        $data['title'] = "Confession Groups";
        echo Modules::run('templates/general', $data);
        
       // $this->load->view('display', $data);
                
    }
    
    function my_groups() {
        if($this->session->userdata('logged_in')) {
        $this->load->model('mdl_pages');

        $user_id = modules::run('users/get_user_id');       
        $data['query'] = $this->mdl_pages->get_where_by_user_id($user_id); //not working: only pulling first page by user.
        
       
        $this->load->view('my_pages', $data);
        } else {
            echo '';
        }
    }
    

    function create() {
        if($this->session->userdata('logged_in')) {
            
            $data = $this->get_data_from_post(); //creating a new
        
        
            $data['module'] = "pages";
            $data['view_file'] = "create_page_form";
            $data['title'] = "New Confession Group";    
            echo Modules::run('templates/general', $data);
           // $this->load->view('create_page_form', $data); 
        } else {
            $this->session->set_flashdata('login_required', 'You must be logged in to add a new confessions page.');
            redirect('users/login');
        }
        
    
    }
    function search() {
        $search_query = $this->get_query();
        $data['query'] = $this->get_search($search_query);
       
        $data['module'] = "pages";
        $data['view_file'] = "search_results";
        $data['title'] = "Search Results";
        echo Modules::run('templates/general', $data);
                
    }
    function search_field() {
        $this->load->view('search_field');
    }
    
    function get_query() {
             
        $search_query = $this->input->post('search_query', TRUE);
        return $search_query;

    }
    
         
         
    function page_name($page_id) {
            //not working
            
            //creating a new
        
            
           
            $query = $this->get_where($page_id);
            foreach($query->result() as $row) {
                $name = $row->name;
                return $name;
            }   
            
            
            
            
        
       
        
    
    }
    
     function get_data_from_post() {
        $data['name'] = $this->input->post('name', TRUE);
        $user_id = modules::run('users/get_user_id');
        $data['user_id'] = $user_id;
        return $data;
    }
    
        function submit() {
    

		$this->load->library('form_validation');
                //checks
                $this->form_validation->set_rules('name', 'Name', 'required|min_length[3]|xss_clean|max_length[45]');
		
                
               
                
                
                if ($this->form_validation->run($this) == FALSE) {
                    //mistake
                    $this->create();
		}
		else
		{
                    //success
                    $data = $this->get_data_from_post();
                   
                                                                  
                    $this->_insert($data);
                    redirect('pages/');
                    //need to add flash data here
                     
                    
		}
        }
        
        
    function pword_check($pword) {
        
        $name = $this->input->post('name', TRUE);
        $pword = Modules::run('security/make_hash', $pword);
      
        $this->load->model('mdl_pages');
        $result = $this->mdl_pages->pword_check($name, $pword);
                
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
function get_search($search_query){
    $this->load->model('mdl_pages');
    $query = $this->mdl_pages->get_search($search_query);
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