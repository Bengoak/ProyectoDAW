
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

function comprobar_alta()
{
    var dato = document.getElementById('dni').value;

    if (dato == "")
    {
        alert("DNI obligatorio...");
        return;
    }
    dato = document.getElementById('nombre').value;

    if (dato == "")
    {
        alert("Nombre obligatorio...");
        return;
    }
    document.FNuevo.submit();
}

function comprobar_baja()
{
    var dato = document.getElementById('dni').value;

    if (dato == "")
    {
        alert("DNI obligatorio...");
        return;
    }
    document.FEliminar.submit();
}
