
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
