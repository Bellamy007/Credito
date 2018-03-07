/**
 *  Modal para eliminar (se usa en diferentes formularios)
 */
function borrar(ruta){
       $("#borrar").attr("href", ruta);
       $("#myModal").modal('show');
}

/**
 * Funcion agregar cliente
 */
$("#addCliente").click(function (e){
    e.preventDefault();
    var url=$("#addCliente").attr("href");
     $.ajax({
            url:   url,
            type:  'get',
            success:  function (response) {
                    $("#addmodal").html(response);
                    $('#modalCliente').modal({show:true});
                    $("#enviar").click(function(){
                        $("#clienteStore").submit();
                    });
            }
    });
});
/**
 * Funcion agregar usuario
 */
$("#addUser").click(function (e){
    e.preventDefault();
    var url=$("#addUser").attr("href");
     $.ajax({
            url:   url,
            type:  'get',
            success:  function (response) {
                    $("#addmodal").html(response);
                    $('#modalUser').modal({show:true});
                    $("#enviar").click(function(){
                        $("#userStore").submit();
                    });
            }
    });
});