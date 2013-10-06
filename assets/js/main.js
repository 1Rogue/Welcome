var complete = 1;

jQuery(document).ready(function($) {

    $("ul.nav li a").click(function(){ 
        if ($(this).parent().hasClass("active")) {
            return;
        }
        if (complete === 1) {
            complete = 0;
            $("#completed").hide('slow');
            $("#development").show('slow');
        } else {
            complete = 1;
            $("#development").hide('slow');
            $("#completed").show('slow');
        }
        $("ul.nav li a").each(function(){
            $(this).parent().removeClass("active");
        });
        $(this).parent().addClass("active");
    });
});