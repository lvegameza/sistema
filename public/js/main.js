$(document).ready(ini);

function ini()
{   
    $('#genero').change(ObtenerSubGenero);    
}

function ObtenerSubGenero()
{    
    $.ajax({
        type: "POST",                
        //url: "http://www.ighgroup.com/systemweb/init/comprobar_usuario_ajax",
        url: "http://localhost:82/sistema/generos/CargarSubGenerosxID",
        data: "genero="+$('#genero').val(),                
            success: function(data){
                $("#subgenero").html(data);                    
            }
        });
}





