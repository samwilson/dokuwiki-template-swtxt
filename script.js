jQuery(document).ready(function() {

    // Give body a class name for small screens.
    jQuery(window).on('resize', function() {
        if (jQuery(window).width() < 960) {
            jQuery("body").addClass("small-screen");
        } else {
            jQuery("body").removeClass("small-screen");
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

    // Add the uploader to the edit screen.
    new qq.FileUploaderExtended({
        element: document.getElementById('swtxt__uploader'),
        action: DOKU_BASE + 'lib/exe/ajax.php',
        params: {
            call: "mediaupload",
            mediaid: "",
            ns: JSINFO.id,
            sectok: jQuery("input[name='sectok']").val()
        }
    });

});
