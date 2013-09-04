<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'normalize.css'; ?>" />

        <title>Confessions.fm</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" language="javascript" src="<?php echo base_url().'jquery.js'; ?>"></script>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url().'style.css'; ?>" />
        <script type="application/javascript" src="<?php echo base_url().'lib/fastclick.js'; ?>"></script> 
        <script type="application/javascript">
    window.addEventListener('load', function() {
        var textInput = document.querySelector('input');

        FastClick.attach(document.body);
        Array.prototype.forEach.call(document.getElementsByClassName('body'), function(testEl) {
            testEl.addEventListener('click', function() {
                textInput.focus();
            }, false)
        });
    }, false);
    
    </script> 
    </head>
    <body>
     

<!--<input type="checkbox" name="handler-right" class="handler" id="handler-right" onclick="null" />-->
<input type="checkbox" name="handler-left" class="handler" id="handler-left" onclick="null" />
        <div id="wrapper"> <!-- the wrapper -->
       
           
                <p id="button">
        <!--<label for="handler-right" id="right" href="#">Open right →</label>-->
         
            <h1><?php echo $title; ?></h1>
        
        <label for="handler-left" id="left" href="#"><div id="fly_in">
                <img src="<?php echo base_url().'lib/menu.png'; ?>" width="22px" height="16px">
                </div></label>
                </p>
        
        <div id="content">
        <?php
        $this->load->view($module.'/'.$view_file)
        ?>

        </div>
    </div>
                <div id="menu">
   <ul>
      <li><a href="/" id="test">Confession Groups</a></li>
      <li><?php echo Modules::run('users/login_status'); ?></li>
   </ul>
</div>
<script type="application/javascript" src="<?php echo base_url().'ftscroller.js'; ?>"></script> 
  

<!--Set up the scroller, disabling horizontal scrolling-->
<script type="application/javascript">
var scroller = new FTScroller(document.getElementById('content'), {
scrollbars: false,
scrollingX: false,
updateOnChanges: true,
alwaysScroll: true,
updateOnWindowResize: true,
bouncing: false
});

$('a').click(function() {
    $('#handler-left').prop('checked', false);
});
</script>
</body>
</html>
