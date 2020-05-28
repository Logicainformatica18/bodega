function personInsert() {

    var formData = new FormData(document.getElementById("person"));
    // .append podemos agregar parametros al formData
    formData.append("metodo", "insert");
    $.ajax({
        url: "php/functionperson.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        asycn: false, //el error que cometí de sintaxis, es async
        cache: false,
        contentType: false,
        processData: false
    }).done(function (echo) {
        $("#resultado").html(echo);
    });
    personNuevo();
}
function personDelete(codigo) {
    //validamos en este if si queremos eliminar con la confirmación
    if (confirm("¿Esta seguro de querer eliminar?")) {
        var formData = new FormData(document.getElementById("person"));
        // .append podemos agregar parametros al formData
        formData.append("metodo", "delete");
        formData.append("codigo", codigo);
        $.ajax({
            url: "php/functionperson.php",
            type: "POST",
            dataType: "HTML",
            data: formData,
            asycn: false, //el error que cometí de sintaxis, es async
            cache: false,
            contentType: false,
            processData: false
        }).done(function (echo) {
            $("#resultado").html(echo);
        });
    }
}
function personSelectOne(codigo) {

    var formData = new FormData(document.getElementById("person"));
    // .append podemos agregar parametros al formData
    formData.append("metodo", "select");
    formData.append("codigo", codigo);
    $.ajax({
        url: "php/functionperson.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        asycn: false, //el error que cometí de sintaxis, es async
        cache: false,
        contentType: false,
        processData: false
    }).done(function (echo) {
        $("#resultado").html(echo);
    });

}
function personSearch() {

    var formData = new FormData(document.getElementById("person"));
    // .append podemos agregar parametros al formData
    formData.append("metodo", "search");
    $.ajax({
        url: "php/functionperson.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        asycn: false, //el error que cometí de sintaxis, es async
        cache: false,
        contentType: false,
        processData: false
    }).done(function (echo) {
        $("#resultado").html(echo);
    });

}

function personUpdate() {

    var formData = new FormData(document.getElementById("person"));
    // .append podemos agregar parametros al formData
    formData.append("metodo", "update");
    $.ajax({
        url: "php/functionperson.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        //  asycn:false, //el error que cometí de sintaxis, es async
        cache: false,
        contentType: false,
        processData: false
    }).done(function (echo) {
        $("#resultado").html(echo);
    });

}
function personLogin() {

    var formData = new FormData(document.getElementById("person"));
    // .append podemos agregar parametros al formData
    formData.append("metodo", "login");
    $.ajax({
        url: "php/functionperson.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        //  asycn:false, //el error que cometí de sintaxis, es async
        cache: false,
        contentType: false,
        processData: false
    }).done(function (echo) {
        $("#resultado").html(echo);
    });

}
function personChangePassword() {

    var formData = new FormData(document.getElementById("person"));
    // .append podemos agregar parametros al formData
    formData.append("metodo", "changePassword");
    $.ajax({
        url: "php/functionperson.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        //  asycn:false, //el error que cometí de sintaxis, es async
        cache: false,
        contentType: false,
        processData: false
    }).done(function (echo) {
        $("#resultado").html(echo);
    });
    //limpia por completo el formulario usando jquery
    // $("#person")[0].reset();
}
function personFiltro() {

    var formData = new FormData(document.getElementById("filtro"));
    // .append podemos agregar parametros al formData
    formData.append("metodo", "filtro");
    $.ajax({
        url: "php/functionperson.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        asycn: false, //el error que cometí de sintaxis, es async
        cache: false,
        contentType: false,
        processData: false
    }).done(function (echo) {
        $("#resultado").html(echo);
    });

}
function personSearch2() {

    var formData = new FormData(document.getElementById("programaciondetalle"));
    // .append podemos agregar parametros al formData
    formData.append("metodo", "search2");
    $.ajax({
        url: "php/functionperson.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        //  asycn:false, //el error que cometí de sintaxis, es async
        cache: false,
        contentType: false,
        processData: false
    }).done(function (echo) {
        $("#resultado").html(echo);
    });

}
function categoriasInsert() {

    var formData = new FormData(document.getElementById("categorias"));
    // .append podemos agregar parametros al formData
    formData.append("metodo", "insert");
    $.ajax({
        url: "php/functioncategorias.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        asycn: false, //el error que cometí de sintaxis, es async
        cache: false,
        contentType: false,
        processData: false
    }).done(function (echo) {
        $("#resultado").html(echo);
    });

}
function categoriasDelete(codigo) {
    //validamos en este if si queremos eliminar con la confirmación
    if (confirm("¿Esta seguro de querer eliminar?")) {
        var formData = new FormData(document.getElementById("categorias"));
        // .append podemos agregar parametros al formData
        formData.append("metodo", "delete");
        formData.append("codigo", codigo);
        $.ajax({
            url: "php/functioncategorias.php",
            type: "POST",
            dataType: "HTML",
            data: formData,
            asycn: false, //el error que cometí de sintaxis, es async
            cache: false,
            contentType: false,
            processData: false
        }).done(function (echo) {
            $("#resultado").html(echo);
        });
    }
}

function categoriasSelectOne(codigo) {

    var formData = new FormData(document.getElementById("categorias"));
    // .append podemos agregar parametros al formData
    formData.append("metodo", "select");
    formData.append("codigo", codigo);
    $.ajax({
        url: "php/functioncategorias.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        asycn: false, //el error que cometí de sintaxis, es async
        cache: false,
        contentType: false,
        processData: false
    }).done(function (echo) {
        $("#resultado").html(echo);
    });

}
function categoriasUpdate() {

    var formData = new FormData(document.getElementById("categorias"));
    // .append podemos agregar parametros al formData
    formData.append("metodo", "update");
    $.ajax({
        url: "php/functioncategorias.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        //  asycn:false, //el error que cometí de sintaxis, es async
        cache: false,
        contentType: false,
        processData: false
    }).done(function (echo) {
        $("#resultado").html(echo);
    });
}
function categoriasSearch() {

    var formData = new FormData(document.getElementById("categorias"));
    // .append podemos agregar parametros al formData
    formData.append("metodo", "search");
    $.ajax({
        url: "php/functioncategorias.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        //  asycn:false, //el error que cometí de sintaxis, es async
        cache: false,
        contentType: false,
        processData: false
    }).done(function (echo) {
        $("#resultado").html(echo);
    });
}


function productosInsert() {

    var formData = new FormData(document.getElementById("productos"));
    // .append podemos agregar parametros al formData
    formData.append("metodo", "insert");
    $.ajax({
        url: "php/functionproductos.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        asycn: false, //el error que cometí de sintaxis, es async
        cache: false,
        contentType: false,
        processData: false
    }).done(function (echo) {
        $("#resultado").html(echo);
    });

}
function productosDelete(codigo) {
    //validamos en este if si queremos eliminar con la confirmación
    if (confirm("¿Esta seguro de querer eliminar?")) {
        var formData = new FormData(document.getElementById("productos"));
        // .append podemos agregar parametros al formData
        formData.append("metodo", "delete");
        formData.append("codigo", codigo);
        $.ajax({
            url: "php/functionproductos.php",
            type: "POST",
            dataType: "HTML",
            data: formData,
            asycn: false, //el error que cometí de sintaxis, es async
            cache: false,
            contentType: false,
            processData: false
        }).done(function (echo) {
            $("#resultado").html(echo);
        });
    }
}

function productosSelectOne(codigo) {

    var formData = new FormData(document.getElementById("productos"));
    // .append podemos agregar parametros al formData
    formData.append("metodo", "select");
    formData.append("codigo", codigo);
    $.ajax({
        url: "php/functionproductos.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        asycn: false, //el error que cometí de sintaxis, es async
        cache: false,
        contentType: false,
        processData: false
    }).done(function (echo) {
        $("#resultado").html(echo);
    });

}
function productosUpdate() {

    var formData = new FormData(document.getElementById("productos"));
    // .append podemos agregar parametros al formData
    formData.append("metodo", "update");
    $.ajax({
        url: "php/functionproductos.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        //  asycn:false, //el error que cometí de sintaxis, es async
        cache: false,
        contentType: false,
        processData: false
    }).done(function (echo) {
        $("#resultado").html(echo);
    });
}
function productosSearch() {

    var formData = new FormData(document.getElementById("productos"));
    // .append podemos agregar parametros al formData
    formData.append("metodo", "search");
    $.ajax({
        url: "php/functionproductos.php",
        type: "POST",
        dataType: "HTML",
        data: formData,
        //  asycn:false, //el error que cometí de sintaxis, es async
        cache: false,
        contentType: false,
        processData: false
    }).done(function (echo) {
        $("#resultado").html(echo);
    });
}








function envioWhatsapp(cliente){


    let url = "https://api.whatsapp.com/send?phone=51997852483&text=*_Sistema_*%0A*Horario*%0A%0A*¿Cual es tu nombre?*%0A" + cliente;
    window.open(url);
}




function categoriasEditar() {
    categorias.btn.disabled = true;
    categorias.nuevo.disabled = true;
    categorias.modificar.disabled = false;
  
}
function categoriasNuevo() {
    categorias.btn.disabled = false;
    categorias.nuevo.disabled = false;
    categorias.modificar.disabled = true;
    //limpia por completo el formulario usando jquery
    $("#categorias")[0].reset();
}

function productosEditar() {
    productos.btn.disabled = true;
    productos.nuevo.disabled = true;
    productos.modificar.disabled = false;
  
}
function productosNuevo() {
    productos.btn.disabled = false;
    productos.nuevo.disabled = false;
    productos.modificar.disabled = true;
    //limpia por completo el formulario usando jquery
    $("#productos")[0].reset();
}
