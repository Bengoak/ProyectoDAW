$(document).ready(function(){

    $('#insertar').submit(function(e){

        e.preventDefault();
        var valido = true;

        $(':text').each( function() {
            if ( $(this).val().length == 0){
                $(this).css("background","red");
                valido = false;
            }
            else
            {
                $(this).css("background","white");
            }
        });


    });


});

