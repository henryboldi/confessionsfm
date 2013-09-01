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
        <link rel="stylesheet" href="http://localhost/normalize.css" type="text/css"/>

        <title>Confessions.fm</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" language="javascript" src="http://localhost/jquery.js"></script>
        <link type="text/css" rel="stylesheet" href="http://localhost/style.css" />
        <script type="application/javascript" src="http://localhost/lib/fastclick.js"></script> 
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
ghfdjhs
        </div>
                <div id="menu">
   <ul>
      <li><a href="/">Home</a></li>
      <li><a href="/about/">About us</a></li>
      <li><a href="/contact/">Contact</a></li>
   </ul>
</div>
	<script src='http://localhost/ftscroller.js'></script>

<!--Set up the scroller, disabling horizontal scrolling-->
<script>
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
