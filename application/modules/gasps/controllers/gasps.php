<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gasps extends MX_Controller {
    

    
    
    function create() {
        
        
        $data['module'] = "gasps";
        $data['view_file'] = "gasp_button";
        
        $this->load->view('gasp_button', $data);
    
    }
    
    function get_data_from_db($confessionid) {
        $query = $this->get_where_custom('confessionid', $confessionid);
        foreach($query->result() as $row) {
            $data['id'] = $row->id;
            $data['numberofgasps'] = $row->numberofgasps;
            $data['confessionid'] = $row->confessionid;              
        }
        return $data;
    }
    
 
    //problem finding if it's been done or not
    function get_data_from_post() {
        
        //here
        
            $data = $this->get_data_from_db($this->uri->segment(3));
       
        if ($data['numberofgasps'] < 1) {
            $data['numberofgasps'] = $this->input->post('numberofgasps', TRUE);
            $data['confessionid'] = $this->input->post('confessionid', TRUE);          
        } else {
            $data['numberofgasps'] = $data['numberofgasps'] + 1;
            $data['confessionid'] = $this->input->post('confessionid', TRUE);
        }
        return $data;
    }
    
    
    //issue here
 
    
    function submit() {
    
		
                $confessionid = $this->input->post('confessionid', TRUE);

                
                
                
                

                    //success
                    $data = $this->get_data_from_post();
                    
                    //need to fix to know if it's updating
                        if ($data['numberofgasps'] > 1) {
                            $this->_update($data['id'], $data);
                            redirect('addedgaspupdate');
                        } else {                                            
                            $this->_insert($data);
                            redirect('firstgaspinsert');
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