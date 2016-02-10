$(document).ready(function(){

    $('#insertar').submit(function(e){

        //e.preventDefault();
        var valido = true;

        if($('#dni').val().length == 0){
            $('#dni').parent().attr('class', 'form-group has-error');
            valido = false;
        }
        else {
            $('#dni').parent().attr('class', 'form-group has-success');
        }

        if($('#nom').val().length == 0){
            $('#nom').parent().attr('class', 'form-group has-error');
            valido = false;
        }
        else {
            $('#nom').parent().attr('class', 'form-group has-success');
        }

        if($('#ape1').val().length == 0){
            $('#ape1').parent().attr('class', 'form-group has-error');
            valido = false;
        }
        else {
            $('#ape1').parent().attr('class', 'form-group has-success');
        }

        if($('#ape2').val().length == 0){
            $('#ape2').parent().attr('class', 'form-group has-error');
            valido = false;
        }
        else {
            $('#ape2').parent().attr('class', 'form-group has-success');
        }

        if($('#fecha_nac').val().length == 0){
            $('#fecha_nac').parent().attr('class', 'form-group has-error');
            valido = false;
        }
        else {
            $('#fecha_nac').parent().attr('class', 'form-group has-success');
        }

        if(valido){
            $('#insertar').attr('action', 'http://192.168.33.10/ProyectoDAW/proyecto/Pruebas/Controlador/Puente.php')
        }

    });


});

