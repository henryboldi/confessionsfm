<?php

echo validation_errors('<p style="color: red;">', '</p>');

echo form_open('users/submit');

//echo "<h1>Create a new account</h1>";
echo "<div class='post' id='first'>";
echo "Email: ";
echo form_input('user_email', $user_email);
echo "<br>";

echo "Password: ";
echo form_password('user_pass', $user_pass);
echo "<br>";


echo form_submit('submit', 'Submit');


echo form_close();

echo "</br><div class='havean'>Already have an account? ".anchor('users/login', 'Login').'</div>';
echo "</div>";