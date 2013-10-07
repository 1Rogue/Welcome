var complete = 1;

jQuery(document).ready(function($) {

    $("ul.nav li a").click(function() {
        if ($(this).parent().hasClass("active")) {
            return;
        }
        if (complete === 1) {
            complete = 0;
            //$("#complete").promise().done(function() {
                $("#completed").fadeOut(0);
                $("#development").fadeIn(800);
            //});
        } else {
            complete = 1;
            //$("#development").promise().done(function() {
                $("#development").fadeOut(0);
                $("#completed").fadeIn(800);
            //});
        }
        $("ul.nav li a").each(function() {
            $(this).parent().removeClass("active");
        });
        $(this).parent().addClass("active");
    });
});