<?php

//echo anchor('pages/create', '<p>Create New Page</p>');
//print_r($query);
//echo $confession_id;
foreach ($query->result() as $row) {
 echo $row->comment.'<br><br>';
}

?>
