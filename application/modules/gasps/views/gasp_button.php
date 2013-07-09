<?php

echo validation_errors('<p style="color: red;">', '</p>');

echo form_open('gasps/submit');

echo form_hidden('numberofgasps', 1);

echo form_hidden('confessionid', $this->uri->segment(3));

echo form_submit('submit', 'GASP!');


echo form_close();
