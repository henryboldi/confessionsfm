<h1>Confession Pages</h1>
<?php

echo anchor('pages/create', '<p>Create New Page</p>');

foreach ($query->result() as $row) {
    $edit_url = base_url().'confessions/'.$row->id;
    echo "<h2><a href='../../confessions/view/".$row->id."'>".$row->name."</a></h1>";
    echo Modules::run('gasps/create', $firstname, $lastname);
}
    
    

?>