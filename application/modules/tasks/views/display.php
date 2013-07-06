<h1>Your tasks</h1>
<?php

echo anchor('tasks/create', '<p>Create New Task</p>');

foreach ($query->result() as $row) {
    $edit_url = base_url().'tasks/create/'.$row->id;
    echo "<h2>".$row->title." &nbsp; &nbsp; <a href='".$edit_url."'>EDIT</a></h2>";
}
    
echo "<hr>";    

$firstname = "David";
$lastname = "Boldizsar";
$this->load->module('nofun');
$this->nofun->sayhello($firstname, $lastname);

echo "<hr>"; 

echo Modules::run('nofun/sayhello', $firstname, $lastname);
    

?>