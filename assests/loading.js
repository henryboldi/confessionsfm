$(document).ready(function()  {
    // initial
    $('#content').load('pages');
    
    $( document ).ajaxComplete(function( event,request, settings ) {
        //alert('ajax complete!');
        $('a').click(function() {
            //alert('Ok');
            var page = $(this).attr('href');
            //alert(page);
            $('#content').html( "<img class='centerImage' src='assests/loading.gif' alt='loading...' height='32' width='32'> " ).load(page);
            return false;
            
        });
    });
    
    
    
});

