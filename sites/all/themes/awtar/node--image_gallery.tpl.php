<?php if(is_array($node->field_gallery_image)):?>
    <?php foreach($node->field_gallery_image['und'] as $image):?>
        <div class="grid-3 alpha omega inner-gallery">
            <a href="<?php print file_create_url($image['uri']);?>" rel="lightbox2['gallery']" class="colorbox" title="<?php print $image['title'];?>">
                <img src="<?php print image_style_url('grid-3', $image['uri']);?>" alt="<?php print $image['alt'];?>">
            </a>
        </div>
    <?php endforeach;?>
<?php endif;?>