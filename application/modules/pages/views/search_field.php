<?php
$form_attr = 'class="searchbox"';
echo form_open('pages/search', $form_attr);

//echo "<div class='post'>Search:";
$field_attr = 'id="search" placeholder="Search for a confessions group"';
echo form_input('search_query', NULL, $field_attr);


echo form_submit('submit', 'Search');

echo form_close();

?>
