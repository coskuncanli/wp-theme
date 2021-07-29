$(document).ready(function () {
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() >= 150) {
                $("#btn-up").css('visibility','visible');
                $("#search-box").hide('slow');
            }else{
                $("#btn-up").css('visibility','hidden');
            }
            console.log($(window).scrollTop);
        });
    });
    
    $(".search-btn").click(function(event){
        $("#search-box").toggle();
        $("#search").focus();
        event.stopPropagation();
    });
    $("#search").click(function(event){
        event.stopPropagation();
    })
    

    $(window).click(function(){
        $('#search-box') .hide();
    });
    
});
