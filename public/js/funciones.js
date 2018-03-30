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

/**
 * Funcion cobo avales, oculta y desoculta valores de avales dependiendo de los clientes
 */

/**
 * Funcion info cliente
 */
function infoCLiente(url,url2){
    var x = $("#cliente").val();
    var token = $("#_token").val();
     $('#avales').empty().append('whatever');
         $.ajax({
            data:{ 'id_cliente' : x , '_token' : token},
            url:   url,
            type:  'post',
            success:  function (response) {
                    $("#infoCliente").html(response);
                    }
            });
         $.ajax({
            data:{ 'id_aval' : x , '_token' : token},
            url:   url2,
            type:  'post',
            success:  function (response) {
                    $("#avales").html(response);
                    }
            });
}
/**
 * Calculo pagos por semana
 */
function precioPagos(){
    var cantidad = $("#cantidad").val();
    var resultado = (cantidad * 7.8)/100;
    var res_final =(resultado.toFixed(2));
    $("#pagos").val(res_final);
}