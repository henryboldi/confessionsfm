<?php

echo validation_errors('<p style="color: red;">', '</p>');

echo form_open('confessions/submit');

echo "Confession: ";
echo form_input('confession', $confession);

echo "<br>";

echo form_hidden('page_id', $this->uri->segment(3));

echo form_hidden('confession_date_time', date('Y-m-d H:i:s'));

echo form_submit('submit', 'Submit');


echo form_close();
