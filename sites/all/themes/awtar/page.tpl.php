<div id="page-wrapper" class="container-12">
    <div id="page">
        <header>
            <?php include('inc/header.inc.php');?>
        </header>
        <div class="grid-12 sep_header omega alpha" id="head-sep">&nbsp;</div>
        <div id="main-wrapper" class="grid-12">
            <div id="main">
                <div id="content" class="column">
        <?php if ($page['sidebar']): ?>
            <div class="section grid-3 alpha" id="sidebar">
                <?php print render($page['sidebar']);?>
            </div>
            <div class="section grid-9 omega" id="events-content">
        <?php else: ?>
            <div class="section" id="events-content">
        <?php endif;?>
        <a id="main-content"></a>
        <header>
            <?php print render($title_prefix); ?>
            <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
            <?php print render($title_suffix); ?>
        </header>
        <div class="events-sep clearfix">&nbsp;</div>

        <section id="<?php echo (isset($node)) ? 'main-content' : 'pages-content';?>">
            <?php if ($tabs): ?>
            <div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
            <?php print render($page['help']); ?>
            <?php print $messages; ?>
            <?php if ($action_links): ?>
            <ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
            <?php print render($page['content']); ?>
            <?php print $feed_icons; ?>
        </section>
        </div></div> <!-- /.section, /#content -->
        </div>
        </div>
            <!-- /#main, /#main-wrapper -->

        <footer id="footer" role="contentinfo" class="footer grid-12 clearfix">
            <?php include('inc/footer.inc.php');?>
        </footer>
            <!-- /.section, /#footer -->
</div></div>
<!-- /#page, /#page-wrapper -->