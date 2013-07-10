<?php

echo validation_errors('<p style="color: red;">', '</p>');

echo form_open('pages/submit');

echo "Confession Page Name: ";
echo form_input('name', $name);
echo "<br>";

echo "Password: ";
echo form_password('pword', $pword);
echo "<br>";


echo form_submit('submit', 'Submit');


echo form_close();
