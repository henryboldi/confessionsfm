<?php

//$this->load->module('pages');
//echo '<h1>'.$this->pages->page_name($this->uri->segment(3)).'</h1>';
echo "<div class='post' id='first'>";
echo anchor('confessions/create/'.$this->uri->segment(3), 'Confess');
echo '</div>';
foreach ($query->result() as $row) {
    $edit_url = base_url().'confessions/'.$row->id;
    //echo "<div id='".$row->id."'class='post'><a class='red' href='/confessions/view/".$row->page_id."'>".$this->pages->page_name($this->uri->segment(3))."</a><p>".$row->confession.'</p> at '.$row->confession_date_time;
    //echo '<div class="post-img"><img src="images/post-img1.png" alt=""></div><div class="post-snippet"><h2 class="post-title"><a href="/confessions/view/'.$row->page_id.'">'.$this->pages->page_name($this->uri->segment(3)).'</a></h2><div class="post-body"><p>'.$row->confession.'</p></div>'; //then title
     //load comments
    echo '
     <!-- /.post -->
<div class="post clearfix">
        
        <div class="post-snippet">
                <h2 class="post-title"><a href="/confessions/view/'.$row->page_id.'">'.$this->pages->page_name($this->uri->segment(3)).'</a></h2>
                <div class="post-body">
                        <p>
                                '.$row->confession.'
                        </p>
                        <a href="#" class="comments" id="button_'.$row->id.'">';
                        $this->load->module('comments'); // load comments module
                        $this->comments->number_of_comments($row->id);
                        echo '</a>
                        <span class="comments_view" id="comments_'.$row->id.'">';
    
    $this->comments->view($row->id); // load comments view
    $this->comments->create($row->id); // load comments create
    echo '</span>
                </div>
                <div class="post-foot">
                        <ul class="inline-list">
                                <li>';
    $this->load->module('gasps');
    
    $this->gasps->create($row->id);
    echo '
                                        
                                </li>
                                <li>
                                        <input id="2_button_'.$row->id.'" class="btn btn-pink inline" type="submit" value="Comment"></input>
                                </li>
                                <li>
                                        <a href="#"><span>Share</span></a>
                                </li>
                        </ul>
                </div>
                <span class="post-time">
                        <a href="#"><span>'.$row->confession_date_time.'</span></a>
                </span>';
    if ($this->session->flashdata('errors')){ //change!
        if ($this->session->flashdata('id') == $row->id) {
            echo "<div class='error'>";
            echo $this->session->flashdata('errors');
            echo "</div>";
        }
    }    
            echo '
        </div>
</div>
<!-- /.post -->   

    ';
    
    echo "<script type='text/javascript'>
  function hide()
  {
    var div = document.getElementById('comments_".$row->id."');
    div.style.display = 'none';
  }
  window.onload=hide;        

var button = document.getElementById('button_".$row->id."');

button.onclick = function() {
    var div = document.getElementById('comments_".$row->id."');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
    }
    else {
        div.style.display = 'block';
    }
};  

var button_2 = document.getElementById('2_button_".$row->id."');

button_2.onclick = function() {
    var div = document.getElementById('comments_".$row->id."');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
    }
    else {
        div.style.display = 'block';
    }
};  

</script>";
    
}
    
echo $this->pagination->create_links();

?>