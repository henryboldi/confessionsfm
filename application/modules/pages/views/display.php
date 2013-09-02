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
         
            <h1>Confession <b>Feed</b></h1>
        
        <label for="handler-left" id="left" href="#"><div id="fly_in">
                Menu
                </div></label>
                </p>
        
        <div id="content">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquet, ligula sit amet aliquam viverra, eros risus molestie eros, eu euismod urna turpis id justo. Integer rhoncus augue ut convallis venenatis. Aenean tempus leo dolor. Vestibulum eget sapien ut lorem hendrerit iaculis. Aenean et nibh commodo, bibendum sapien nec, suscipit tellus. Aenean consectetur quis urna mattis dapibus. Suspendisse quis volutpat sem, in consectetur nulla. Mauris quis nulla in turpis consequat sollicitudin ac tempor est. Nullam dictum aliquam condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis volutpat rutrum hendrerit. Integer ornare tempus tincidunt. Ut quis dui orci. Suspendisse fermentum augue ac fringilla dignissim. Suspendisse nec risus ut dui ultrices auctor. Ut vitae mi vitae sem porta commodo blandit at orci.</p>
        </div>
    </div>
                <div id="menu">
   <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/about/">About us</a></li>
      <li><a href="/contact/">Contact</a></li>
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
</script>
</body>
</html>
