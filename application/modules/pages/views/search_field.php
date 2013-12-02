<?php
$form_attr = 'class="searchbox"';
echo form_open('pages/search', $form_attr);

//echo "<div class='post'>Search:";
$field_attr = 'id="search"';
echo form_input('search_query', '', $field_attr);


echo form_submit('submit', 'Search');
echo '</div>';

?>
