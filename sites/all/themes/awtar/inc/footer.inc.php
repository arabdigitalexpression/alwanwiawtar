    <div class="section grid-2 alpha">
      <?php print render($page['footer-1']); ?>
    </div>
    <div class="section grid-2">
      <?php print render($page['footer-2']); ?>
    </div>
    <div class="section grid-2">
      <?php print render($page['footer-3']); ?>
    </div>
    <div class="section grid-2 suffix-1">
      <?php print render($page['footer-4']); ?>
    </div>
    <div class="section grid-3 omega">
      <h3 class="social-title">
          <?php if($language->language === 'en'):?>
            Get in Touch
          <?php else:?>
            لنبقى على تواصل
          <?php endif;?>
      </h3>
      <ul class="social">
        <li><a href="https://www.facebook.com/Alwan.Awtar?ref=ts&fref=ts" title="Facebook"><img src="<?php print $base_url.'/'.drupal_get_path('theme','awtar');?>/images/facebook_img.png" /></a></li>
        <li><a href="https://twitter.com/AlwanWaAwtar" title="Twitter"><img src="<?php print $base_url.'/'.drupal_get_path('theme','awtar');?>/images/twitter_img.png" /></a></li>
        <li><a href="http://www.youtube.com/user/Alwanwaawtar1" title="Youtube"><img src="<?php print $base_url.'/'.drupal_get_path('theme','awtar');?>/images/youtubeicon.png" /></a></li>
      </ul>
      <a href="http://arabdigitalexpression.org" title="مؤسسة التعبير الرقمي العربي | أضف">
        <img src="<?php print $base_url.'/'.drupal_get_path('theme','awtar');?>/images/adef.png" />
      </a>
    </div>     
          <?php if($language->language === 'en'):?>
           <div id="cc-text" style="font-size:11px;float:right;">
This site is developed and managed<a href="https://drupal.org/" title="Drupal"> using open source tools</a> and published<a href="http://creativecommons.org/" title="Creative Commons"> under the Creative Commons license:</a><a href="http://creativecommons.org/licenses/by-sa/3.0/" title="SA"> attribution - the same license, Version 3.0</a>
</div>
<div id="cc-logo">
<a href="http://creativecommons.org/licenses/by-sa/3.0/" title="SA"><img id="cc-logo-img" style="max-width:30%;" src="<?php print $base_url.'/'.drupal_get_path('theme','awtar');?>/images/cc-logo.png" /></a>
</div>
          <?php else:?>
            لنبقى على تواصل
          <?php endif;?>
