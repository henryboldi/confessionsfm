<?php

echo validation_errors('<p style="color: red;">', '</p>');

echo form_open('comments/submit');

echo "Comment: ";
echo form_input('comment', $comment);

echo "<br>";

echo form_hidden('confession_id', $this->uri->segment(3));

echo form_hidden('comment_date_time', date('Y-m-d H:i:s'));

echo form_submit('submit', 'Submit');


echo form_close();
