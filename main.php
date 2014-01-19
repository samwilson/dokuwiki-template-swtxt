<?php if (!defined('DOKU_INC')) exit(1); ?>

<!DOCTYPE html>
<html lang="<?php echo $conf['lang'] ?>" dir="<?php echo $lang['direction'] ?>">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <!--link rel="stylesheet" href="http://www.w3.org/StyleSheets/Core/Oldstyle" type="text/css"-->
        <title><?php tpl_pagetitle() ?> :: <?php echo strip_tags($conf['title']) ?></title>
        <?php tpl_metaheaders() ?>
    </head>

    <body>

        <div id="site" class="dokuwiki mode_<?php echo $ACT ?>">

            <header>
                <div id="msgarea"><?php html_msgarea() ?></div>
            </header>

            <div id="content">
                <?php
                tpl_flush();
                tpl_content();
                tpl_flush();
                ?>
            </div><!-- #content -->

            <div id="searchbar">
                <?php
                tpl_action('login', 1, '');
                tpl_searchform();
                ?>
            </div><!--#searchbar -->

            <?php if ($_SERVER['REMOTE_USER']): ?>
            <ul id="toolbar">
                <?php
                tpl_action('profile', 1, 'li');
                tpl_action('backlink', 1, 'li');
                tpl_action('subscribe', 1, 'li');
                tpl_action('recent', 1, 'li');
                tpl_action('media', 1, 'li');
                tpl_action('admin', 1, 'li');
                tpl_action('index', 1, 'li');
                tpl_action('history', 1, 'li');
                tpl_action('edit', 1, 'li');
                ?>
            </ul>
            <?php endif ?>

            <div class="printonly" id="printfooter">
                Printed from <code><?php echo $_SERVER['SCRIPT_URI'] ?></code><br />
                Last modified <?php echo dformat($INFO['lastmod']) ?>
            </div>

        </div><!-- #site -->

        <div class="no"><?php tpl_indexerWebBug() ?></div>

    </body>
</html>
