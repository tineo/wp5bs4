
jQuery(document).ready(function($) {

    window.addEventListener('scroll', function(event) { // To listen for event
        event.preventDefault();
        //alert("js enable 1");
        if (window.scrollY <= 60) { // Just an example
            jQuery("nav").addClass("navbar-transparent");
            jQuery("nav").removeClass("bg-light");

            jQuery("nav").removeClass("navbar-light");
        } else {
            jQuery("nav").addClass("bg-light");
            jQuery("nav").removeClass("navbar-transparent");

            jQuery("nav").addClass("navbar-light");

        }
    });

    $(".content > h1").addClass("container my-5");
    $(".hbspt-form").addClass("container");

});

