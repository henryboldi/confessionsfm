<?php

        foreach($query->result() as $row) {
            $name = $row->name;
            $link = '/confessions/view/'.$row->id;
            echo "<div class='post'><h2><a class='red' href='".$link."'>".$name.'</a></h2></div>';
        }

?>