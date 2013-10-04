var complete = 1;

jQuery(document).ready(function($) {

    $("ul.nav li a").click(function(){ 
        if ($(this).parent().hasClass("active")) {
            return;
        }
        if (complete === 1) {
            $(".complete").fadeOut();
            $("#completed").hide('slow');
            $("#development").show();
            $(".dev").fadeIn();
            complete = 0;
        } else {
            $(".dev").fadeOut();
            $("#development").hide('slow');
            $("#completed").show();
            $(".complete").fadeIn();
            complete = 1;
        }
        $("ul.nav li a").each(function(){
            $(this).parent().removeClass("active");
        });
        $(this).parent().addClass("active");
    });
});