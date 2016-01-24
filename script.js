jQuery(document).ready(function() {

    // Give body a class name for small screens.
    jQuery(window).on('resize', function() {
        if (jQuery(window).width() < 960) {
            jQuery("body").addClass("small-screen");
        }
    }).resize();

    jQuery("table img.media").parents("table").addClass("media");
    jQuery("#sidebar").append(jQuery("#dw__toc"));
    jQuery("body")
            .prepend(jQuery("form#dw__search"))
            .prepend(jQuery("ul#toolbar"));
    jQuery("form#dw__search").append(jQuery("a.loginout"));

    // Move ToC down to below first heading.
    jQuery("#content h1:first").after(jQuery("#dw__toc"));
});
