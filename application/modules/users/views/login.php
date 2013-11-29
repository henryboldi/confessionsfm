<?php

echo $this->session->flashdata('login_required');
echo validation_errors('<p style="color: red;">', '</p>');

echo form_open('users/loginsubmit');

//echo "<h1>Login</h1>";
echo "<div class='post' id='first'>";
if (isset($error)) {
    echo $error.'<br><br>';
}
echo "Email: ";
echo form_input('user_email', $user_email);
echo "<br>";

echo "Password: ";
echo form_password('user_pass', $user_pass);
echo "<br>";


echo form_submit('submit', 'Login');
echo form_close();
echo "</br><div class='havean'>Don't have an account? ".anchor('users/create', 'Signup')."</div>";
echo "</div>";

