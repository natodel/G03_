$(document).ready( function(){

    $('#submenu').click( function(event){
        event.stopPropagation();
        $('#drop').toggle();
    });
    
    $(document).click( function(){
        $('#drop').hide();
    });
  
});