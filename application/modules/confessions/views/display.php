<?php

//$this->load->module('pages');
//echo '<h1>'.$this->pages->page_name($this->uri->segment(3)).'</h1>';
echo "<div class='post' id='first'>";
echo anchor('confessions/create/'.$this->uri->segment(3), 'Confess');
echo '</div>';
foreach ($query->result() as $row) {
    $edit_url = base_url().'confessions/'.$row->id;
    echo "<div class='post'><a class='red' href='/confessions/view/".$row->page_id."'>".$this->pages->page_name($this->uri->segment(3))."</a><p>".$row->confession.'</p> at '.$row->confession_date_time;
    $this->load->module('gasps');
    $this->gasps->create($row->id);
    
    //load comments
    $this->load->module('comments');
    $this->comments->create($row->id);
    $this->comments->view($row->id);
    
    //end div
    echo "<div id='result'></div>";
    Modules::run('comments/view', $row->id);
    echo '</div>';
}
    


?>
    