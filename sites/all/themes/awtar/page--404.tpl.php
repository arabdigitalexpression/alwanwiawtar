<div id="page-wrapper" class="container-12">
    <div id="page">
        <header>
            <?php include('inc/header.inc.php');?>
        </header>
        <div class="grid-12 sep_header omega alpha" id="head-sep">&nbsp;</div>

        <div id="main-wrapper" class="grid-12">
            <div id="main">
                <div id="content" class="column">

                    <div class="section" id="events-content">
                        <a id="main-content"></a>

                        <div class="events-sep clearfix">&nbsp;</div>

                        <section id="<?php echo (isset($node)) ? 'main-content' : 'pages-content';?>">
                            <?php if ($tabs): ?>
                            <div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                            <?php print render($page['help']); ?>
                            <?php print $messages; ?>
                            <?php if ($action_links): ?>
                            <ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                            <section class="not-found">
                                <header>
                                    <?php print render($title_prefix); ?>
                                    <?php if ($title): ?><h1 class="title" id="page-title">ERROR</h1><?php endif; ?>
                                    <?php print render($title_suffix); ?>
                                </header>
                                Sorry, but :
                                <ul>
                                    <li>The page you are looking for has not been found.</li>
                                    <li>(or) You don't have permission to see the content of the page you are looking for</li>
                                </ul>
                                Try checking the URL for errors or check the listed links for what you’re looking for.
                            </section>
                            <?php print $feed_icons; ?>
                        </section>
                    </div>
                </div>
                <!-- /.section, /#content -->
            </div>
        </div>
        <!-- /#main, /#main-wrapper -->

        <footer id="footer" role="contentinfo" class="footer grid-12 clearfix">
            <?php include('inc/footer.inc.php');?>
        </footer>
        <!-- /.section, /#footer -->
    </div>
</div>
<!-- /#page, /#page-wrapper -->