<?php global $base_url;?>
<?php if ($main_menu || $secondary_menu): ?>
    <div class="grid-3" xmlns="http://www.w3.org/1999/html">
        <?php if($language->language === 'en'):?>
            <a href="<?php print $base_url;?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
        <?php else:?>
            <a href="<?php print $base_url.'/'.$language->language;?>"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
        <?php endif;?>
      </div>
      <div id="navigation" class="grid-9"><div class="section">
        <div class="lang float-left">
            <?php if($language->language === 'en'):?>
                <a href="<?php print $base_url;?>/ar">العربية</a>
            <?php else:?>
                <a href="<?php print $base_url;?>">English</a>
            <?php endif;?>
        </div>
        <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')))); ?>
      </div></div> <!-- /.section, /#navigation -->
    <?php endif; ?>
    <?php
    /*
        <?php if ($breadcrumb): ?>
            <div id="breadcrumb" class="grid-12"><?php print $breadcrumb; ?></div>
        <?php endif; ?>
    */
    ?>
    <?php if($page['header']):?><div class="grid-12 clearfix"><?php print render($page['header']);?></div><?php endif;?>