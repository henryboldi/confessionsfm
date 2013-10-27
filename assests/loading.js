$(document).ready(function()  {
    // initial
    $('#content').load('pages');
    
    $( document ).ajaxComplete(function( event,request, settings ) {
        alert('ajax complete!');
        $('a').click(function() {
            //alert('Ok');
            var page = $(this).attr('href');
            //alert(page);
            $('#content').html( "<p>loading...</p>" ).load(page);
            return false;
            
        });
    });
    
    
    
});

