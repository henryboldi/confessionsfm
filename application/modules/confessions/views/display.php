<h1>Confessions</h1>
<?php

//$this->load->module('pages');
//echo $this->pages->page_name($this->uri->segment(3));

echo anchor('confessions/create/'.$this->uri->segment(3), '<p>Confess</p>');

foreach ($query->result() as $row) {
    $edit_url = base_url().'confessions/'.$row->id;
    echo "<h2><a href='".$row->id."'>".$row->confession."</a></h1> at ".$row->confession_date_time;
    $this->load->module('gasps');
    $this->gasps->create($row->id);
}
    
    

?>