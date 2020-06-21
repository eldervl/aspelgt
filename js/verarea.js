$(document).ready(function(){
    vacio();
    verarea1();
})
function verarea1(){ 
    vacio();
    $("#area1").show();
    $("#linkarea1").addClass("active");
}
function verarea2(){ 
    vacio();
    $("#area2").show();
    $("#linkarea2").addClass("active");
}
function verarea3(){ 
    vacio();
    $("#area3").show();
    $("#linkarea3").addClass("active");
}
function verarea4(){ 
    vacio();
    $("#area4").show();
    $("#linkarea4").addClass("active");
}
function verarea5(){ 
    vacio();
    $("#area5").show();
    $("#linkarea5").addClass("active");
}
function verarea6(){ 
    vacio();
    $("#area6").show();
    $("#linkarea6").addClass("active");
}
function vacio(){ 
    $(".cont-area").hide();
    $(".nav-link").removeClass("active");
}
