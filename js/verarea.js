$(document).ready(function(){
    vacio();
    verComercial();
})

function verComercial(){ 
    vacio();
    $("#areaComercial").show();
    $("#linkComercial").addClass("active");
}
function verAdmin(){ 
    vacio();
    $("#areaAdmin").show();
    $("#linkAdmin").addClass("active");
}
function verProduccion(){ 
    vacio();
    $("#areaProduccion").show();
    $("#linkProduccion").addClass("active");
}
function verOtros(){ 
    vacio();
    $("#areaOtros").show();
    $("#linkOtros").addClass("active");
}
function verNube(){ 
    vacio();
    $("#areaNube").show();
    $("#linkNube").addClass("active");
}
function verCompatibilidad(){ 
    vacio();
    $("#areaCompatibilidad").show();
    $("#linkCompatibilidad").addClass("active");
}
function vacio(){ 
    $(".cont-area").hide();
    $(".nav-link").removeClass("active");
}
