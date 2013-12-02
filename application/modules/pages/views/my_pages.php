<?php

echo '<p>Your Groups</p><ul class="list-default">';

foreach ($query->result() as $row) {
    $edit_url = base_url().'confessions/'.$row->id;
    if ( strlen($row->name) >= 15) {
        $row->name = substr($row->name,0,15).'...';
    }
    echo '<li><a href="../../confessions/view/'.$row->id.'"><i class="icon icon-group"></i> '.$row->name."</a></li>";
}

echo anchor('pages/create', ' New Group');
echo '</ul>';

?>
