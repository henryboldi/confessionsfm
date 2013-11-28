<?php

echo form_open('pages/search');

echo "<div class='post'>Search:";
echo form_input('search_query');
echo "<br>";



echo form_submit('submit', 'Search');
echo '</div>';

?>
