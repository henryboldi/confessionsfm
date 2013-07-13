<?php


echo validation_errors('<p style="color: red;">', '</p>');



echo form_open('gasps/submit');

echo form_hidden('number_of_gasps', 1);

echo form_hidden('confession_id', $confession_id);

echo form_submit('submit', 'GASP!');


echo form_close();
