<?php

echo validation_errors('<p style="color: red;">', '</p>');

echo form_open('tasks/submit');

echo "Title: ";
echo form_input('title', $title);

echo "<br>";

echo "Priority: ";
echo form_input('priority', $priority);

echo "<br>";

echo form_submit('submit', 'Submit');

if (isset($update_id)) {
   echo form_hidden('update_id', $update_id); //if it's been set than have a hidden var
}

echo form_close();
