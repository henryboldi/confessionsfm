 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Confessions extends MX_Controller {

function __construct() {
    parent::__construct();
}

    function create() {
        
        $data = $this->get_data_from_post(); //creating a new

        
        
        $data['module'] = "confessions";
        $data['view_file'] = "post_confession_form";
        $data['title'] = "Confess";
        echo Modules::run('templates/general', $data);
        //$this->load->view('post_confession_form', $data); 
    
    }
    function view() {
        $this->load->model('mdl_confessions');
        $this->load->module('pages');
        $name = $this->pages->page_name($this->uri->segment(3));
        
        $this->load->library('pagination');

        $config['base_url'] = '/confessions/view/'.$this->uri->segment(3).'/';
        $config['total_rows'] = $this->mdl_confessions->count_where_custom('page_id', $this->uri->segment(3));
        $config['per_page'] = 15;
        $config['uri_segment'] = 4;

        
        
        $data['query'] = $this->mdl_confessions->get_where_custom_page('page_id', $this->uri->segment(3), $config['per_page'], $this->uri->segment(4));
        $data['module'] = "confessions";
        $data['view_file'] = "display";
        $data['title'] = $name;
        $this->pagination->initialize($config); 
        echo Modules::run('templates/general', $data);
        //$this->load->view('display', $data);
    }
    
    function latest_confessions() {
        $this->load->model('mdl_confessions');
        $this->load->module('pages');
        $name = 'Latest Confessions';
        
        $this->load->library('pagination');

        $config['base_url'] = '/confessions/latest_confessions/';
        $config['total_rows'] = $this->mdl_confessions->count();
        $config['per_page'] = 15;
        $config['uri_segment'] = 3;

        
        
        $data['query'] = $this->mdl_confessions->get_where_custom_all($config['per_page'], $this->uri->segment(4));
        $data['module'] = "confessions";
        $data['view_file'] = "latest";
        $data['title'] = $name;
        $this->pagination->initialize($config); 
        echo Modules::run('templates/general', $data);
        //$this->load->view('display', $data);
        
    }
    
     function get_data_from_post() {
        $data['confession'] = $this->input->post('confession', TRUE); 
        $data['confession_date_time'] = $this->input->post('confession_date_time', TRUE);
        $data['page_id'] = $this->input->post('page_id', TRUE);
        return $data;
    }
    
 
    
    
        function submit() {
    

		$this->load->library('form_validation');
                //checks
                $this->form_validation->set_rules('confession', 'Confession', 'required|min_length[20]|xss_clean|max_length[500]');
		
                
                
                
                
                if ($this->form_validation->run() == FALSE) {
                    //mistake
                    $data = $this->get_data_from_post(); //this is kinda wrong to do here
                    redirect('confessions/create/'.$data['page_id']);
		}
		else
		{
                    //success
                    $data = $this->get_data_from_post();
                                                                  
                    $this->_insert($data);
                    redirect('confessions/view/'.$data['page_id']);
                    //needs to redirect to page it was created on with flash data. 
                    
                    
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

function count_where_custom($col, $value) {
    $this->load->model('mdl_confessions');
    $query = $this->mdl_confessions->count_where_custom($col, $value);
    return $query;
}

function count() {
    $this->load->model('mdl_confessions');
    $query = $this->mdl_confessions->count();
    return $query;
}

function get_where_custom_page($col, $value, $per_page, $uri_4) {
    $this->load->model('mdl_confessions');
    $query = $this->mdl_confessions->get_where_custom_page($col, $value, $per_page, $uri_4);
    return $query;
}

function get_where_custom_all($value, $per_page, $uri_4) {
    $this->load->model('mdl_confessions');
    $query = $this->mdl_confessions->get_where_custom_all($value, $per_page, $uri_4);
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