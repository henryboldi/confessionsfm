<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gasps extends MX_Controller {
    

    
    
    function create() {
        
        
        $confessionid = $this->uri->segment(3); //get id
        
        if (!isset($confessionid)) {
            die();
        }
        
        if (is_numeric($confessionid)) {
            $data = $this->get_data_from_db($confessionid); //if it's there
            var_dump($data);
            $data['confessionid'] = $confessionid;
        } else {
            $data = $this->get_data_from_post(); //creating a new
        }
        
        echo $confessionid;
        
        //var_dump($this->get_where_custom('confessionid', $confessionid));
    
        //$profile = $result[0];
        
        
        $data['module'] = "gasps";
        $data['view_file'] = "gasp_button";
        
        $this->load->view('gasp_button', $data);
    
    }
    
    
    
    function get_data_from_post() {
        $data['numberofgasps'] = $this->input->post('numberofgasps', TRUE);
        return $data;
    }
    
    
    //issue here
    function get_data_from_db($confessionid) {
        $query = $this->get_where_custom('confessionid', $confessionid);
        foreach($query->result() as $row) {
            $data['numberofgasps'] = $row->numberofgasps;
        }
        return $data;
    }
    
    function submit() {
    

		$this->load->library('form_validation');
                //checks
                $this->form_validation->set_rules('numberofgasps', 'Numberofgasps', 'required|xss_clean');
		
                $numberofgasps = $this->input->post('numberofgasps', TRUE);
                
                
                
                
                if ($this->form_validation->run() == FALSE)
		{
                    //mistake
                    $this->create();
		}
		else
		{
                    //success
                    $data = $this->get_data_from_post();
                    
                        if (is_numeric($confessionid)) {
                            $this->_update($confessionid, $data);
                        } else {                                            
                            $this->_insert($data);
                            redirect('gasps/create');
                        }
                    
		}
    }
    
    
 
function get($order_by){
    $this->load->model('mdl_gasps');
    $query = $this->mdl_gasps->get($order_by);
    return $query;
}

function get_with_limit($limit, $offset, $order_by) {
    $this->load->model('mdl_gasps');
    $query = $this->mdl_gasps->get_with_limit($limit, $offset, $order_by);
    return $query;
}

function get_where($id){
    $this->load->model('mdl_gasps');
    $query = $this->mdl_gasps->get_where($id);
    return $query;
}

function get_where_custom($col, $value) {
    $this->load->model('mdl_gasps');
    $query = $this->mdl_gasps->get_where_custom($col, $value);
    return $query;
}

function _insert($data){
    $this->load->model('mdl_gasps');
    $this->mdl_gasps->_insert($data);
}

function _update($id, $data){
    $this->load->model('mdl_gasps');
    $this->mdl_gasps->_update($id, $data);
}

function _delete($id){
    $this->load->model('mdl_gasps');
    $this->mdl_gasps->_delete($id);
}

function count_where($column, $value) {
    $this->load->model('mdl_gasps');
    $count = $this->mdl_gasps->count_where($column, $value);
    return $count;
}

function get_max() {
    $this->load->model('mdl_gasps');
    $max_id = $this->mdl_gasps->get_max();
    return $max_id;
}

function _custom_query($mysql_query) {
    $this->load->model('mdl_gasps');
    $query = $this->mdl_gasps->_custom_query($mysql_query);
    return $query;
}

}