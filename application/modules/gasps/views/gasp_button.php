<?php


echo validation_errors('<p style="color: red;">', '</p>');



echo form_open('gasps/submit');

echo form_hidden('number_of_gasps', 1);

echo form_hidden('confession_id', $confession_id);

$attributes ="class='btn btn-pink inline'";
echo $gasp_counter.form_submit('submit', 'Gasp', $attributes);


echo form_close();
