$(document).ready(function () {
var show = true;


$("button").click(function(){
    if (show) {
        $(".navbar-collapse").css("display", "block");
        show = false;
    }else{
$(".navbar-collapse").css("display", "none");
    show = true;
    }

    });
});
    $(window).resize(function(){
    $(".navbar-collapse").css("display", "none");
});