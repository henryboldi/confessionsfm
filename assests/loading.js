$(document).ready(function()  {
    // initial
    $('#content').html( "<img class='centerImage' src='assests/loading.gif' alt='loading...' height='32' width='32'> " ).load('pages');
    
    $( document ).ajaxComplete(function( event,request, settings ) {
        //alert('ajax complete!');
        $('a').click(function() {
            //alert('Ok');
            var page = $(this).attr('href');
            
            if (page === undefined) {
                var page = 'pages';
            }
            //alert(page);
            $('#content').html( "<img class='centerImage' src='assests/loading.gif' alt='loading...' height='32' width='32'> " ).load(page);
            return false;
            
        });
    });
    
       $(document).on('submit', 'form', function() {
           //alert('submit!');
     dataString = $("#post_confession").serialize();
        
     $.ajax({
       type: "POST",
       url: "http://localhost/app/confessions/submit",
       data: dataString,

       success: function(data){
           alert('Successful!');
       }

     });

     return false;  //stop the actual form post !important!

  });
    
    
});

