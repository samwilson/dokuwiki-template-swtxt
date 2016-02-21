<?php if (!defined('DOKU_INC')) exit(1); ?>

<!DOCTYPE html>
<html lang="<?php echo $conf['lang'] ?>" dir="<?php echo $lang['direction'] ?>">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php tpl_pagetitle() ?> :: <?php echo strip_tags($conf['title']) ?></title>
        <?php tpl_metaheaders() ?>
    </head>

    <body>

        <div id="site" class="dokuwiki mode_<?php echo $ACT ?>">

            <header>
                <div id="msgarea"><?php html_msgarea() ?></div>
            </header>

            <?php tpl_toc() ?>
            <div id="content">
                <?php
                tpl_flush();
                tpl_content(false);
                tpl_flush();
                ?>

                <?php if ($ACT=='edit' || $ACT=='preview'):
                    tpl_include_page('meta:help');
                    $data = array();
                    $mediaDir = $conf['mediadir'].'/'.str_replace(':', '/', $ID);
                    search($data, $mediaDir, 'search_media', []);
                    if (!empty($data)):
                    ?>
                    <h2>Page attachments:</h2>
                    <ol id="media-list">
                        <?php foreach ($data as $file): ?>
                        <li>
                            <img src="<?php echo ml($ID.':'.$file['id'], ['w'=>150]) ?>" />
                            <?php echo $file['file'] ?>
                        </li>
                        <?php endforeach ?>
                        </ol>
                    <?php endif ?>
                <?php endif ?>
            </div><!-- #content -->

            <div id="searchbar">

                <?php tpl_searchform() ?>

                <?php $loginAction = tpl_get_action('login') ?>
                <a href="<?php echo wl($loginAction['id'], $loginAction['params']) ?>"
                   class="action <?php echo $loginAction['type'] ?> loginout"
                   title="<?php echo $lang['btn_'.$loginAction['type']] ?>">
                    Ⓛ
                </a>
            </div><!--#searchbar -->


            <?php if ($_SERVER['REMOTE_USER']): ?>
            <ul id="toolbar">
                <?php
                tpl_action('profile', 1, 'li');
                tpl_action('backlink', 1, 'li');
                tpl_action('subscribe', 1, 'li');
                tpl_action('recent', 1, 'li');
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
