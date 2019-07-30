$(function (){
    $('#select-producto').on('change', metodo_listar);
    $('#select-producto2').on('change', metodo_listar2);
});

function metodo_listar(){
    var nombre = $('#select-producto')[0].value;
    $.get('/ventitas/'+ nombre, function (data) {
        var html_select = '<option value="">Seleccione marca del producto</option>';
        for (var i = 0; i < data.length; i++) {
            html_select += '<option value="' + data[i].marca + '">' + data[i].marca + '</option>'
            $('#select-producto2').html(html_select);
        }
    });
}

function metodo_listar2(){
    var nombre = $('#select-producto2')[0].value;
    $.get('/ventitas_marca/'+ nombre, function (data) {
        var html_select = '<option value="">Seleccione marca del producto</option>';

        for (var i = 0; i < data.length; i++) {
            html_select += '<option value="' + data[i].modelo + '">' + data[i].modelo + '</option>'
            $('#select-producto3').html(html_select);
        }
    });
}
