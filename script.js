jQuery(document).ready(function() {
    jQuery("table img.media").parents("table").addClass("media");
    jQuery("#sidebar").append(jQuery("#dw__toc"));
    jQuery("body")
            .prepend(jQuery("form#dw__search"))
            .prepend(jQuery("ul#toolbar"));
    jQuery("form#dw__search").append(jQuery("a.loginout"));
});
