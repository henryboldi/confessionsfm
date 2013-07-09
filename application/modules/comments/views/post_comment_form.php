<?php

echo validation_errors('<p style="color: red;">', '</p>');

echo form_open('comments/submit');

echo "Comment: ";
echo form_input('comment', $comment);

echo "<br>";

echo form_hidden('confessionid', $this->uri->segment(3));

echo form_hidden('commentdatetime', date('Y-m-d H:i:s'));

echo form_submit('submit', 'Submit');


echo form_close();
