<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
            <?php echo hsc($lang['mediaselect']) ?>
            [<?php echo strip_tags($conf['title']) ?>]
        </title>
        <?php tpl_metaheaders() ?>
    </head>

    <body>
        <!--[if IE 6 ]><div id="IE6"><![endif]--><!--[if IE 7 ]><div id="IE7"><![endif]--><!--[if IE 8 ]><div id="IE8"><![endif]-->
        <div id="media__manager" class="dokuwiki">
            <?php html_msgarea() ?>
            <div id="mediamgr__aside">
                <div class="pad">
                    <h1><?php echo hsc($lang['mediaselect']) ?></h1>
                    <div id="media__opts"></div>
                    <?php tpl_mediaTree() ?>
                </div>
            </div>

            <div id="mediamgr__content">
                <div class="pad">
                    <?php tpl_mediaContent() ?>
                </div>
            </div>
        </div>
        <!--[if ( IE 6 | IE 7 | IE 8 ) ]></div><![endif]-->
    </body>
</html>
