<h3>Confessions to</h3>
<?php

$this->load->module('pages');
echo '<h1>'.$this->pages->page_name($this->uri->segment(3)).'</h1>';

echo anchor('confessions/create/'.$this->uri->segment(3), '<p>Confess</p>');

foreach ($query->result() as $row) {
    $edit_url = base_url().'confessions/'.$row->id;
    echo '<p>'.$row->confession.'</p> at '.$row->confession_date_time;
    $this->load->module('gasps');
    $this->gasps->create($row->id);
}
    
    

?>