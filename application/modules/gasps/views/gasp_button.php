<?php


echo validation_errors('<p style="color: red;">', '</p>');


$form_attr = array('class' => 'gasp_btn', 'id' => $confession_id );
echo form_open('gasps/submit', $form_attr);

echo form_hidden('number_of_gasps', 1);

echo form_hidden('confession_id', $confession_id);

$attributes ="class='btn btn-pink inline'";
echo $gasp_counter.form_submit(null, 'Gasp', $attributes);


echo form_close();
