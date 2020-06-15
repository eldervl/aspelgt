$(window).on('load', function () {
    $("body").css({overflow:"hidden"})
    setTimeout(function () {
    $(".cont-preloader").css({visibility:"hidden",opacity:"0"})
    $("body").css({overflow:"visible"})
}, 700);
   
});