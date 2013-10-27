$(document).ready(function()  {
    // initial
    $('#content').load('pages',  function (responseText, textStatus, XMLHttpRequest) {
    if (textStatus == "success") {
        // handle menu clicks
        $('a').click(function() {
            alert('Ok');
            var page = $(this).attr('href');
            alert(page);
            $('#content').load(page);
            return false;
        });
    }
    if (textStatus == "error") {
         alert('Something went wrong! :O');
    }
  });
    
    
});

