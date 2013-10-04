var complete = 1;

jQuery(document).ready(function($) {

    $("ul.nav li a").click(function(){ 
        if ($(this).parent().hasClass("active")) {
            return;
        }
        if (complete === 1) {
            complete = 0;
            /*$(".complete").fadeOut();
            $("#completed").hide('slow');
            $("#development").show();
            $(".dev").fadeIn();*/
            $("#completed").hide('slow');
            $("#development").show();
        } else {
            complete = 1;
            /*$(".dev").fadeOut();
            $("#development").hide('slow');
            $("#completed").show();
            $(".complete").fadeIn();*/
            $("#development").hide('slow');
            $("#completed").show();
        }
        $("ul.nav li a").each(function(){
            $(this).parent().removeClass("active");
        });
        $(this).parent().addClass("active");
    });
});