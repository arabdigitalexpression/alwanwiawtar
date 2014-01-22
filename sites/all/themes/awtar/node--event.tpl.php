<div class="content events-body"<?php print $content_attributes; ?>>
<?php
        // Hide comments, tags, and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    hide($content['field_tags']);
    if(is_array($node->field_activity_image)){
        print render($content['field_activity_image']);
    }
?>
    <div class="date"><?php print render($content['field_event_date']);?></div>
    <?php print render($content);?>
</div>

<?php if (!empty($content['field_tags']) || !empty($content['links'])): ?>
    <footer>
        <?php print render($content['field_tags']); ?>
        <?php print render($content['links']); ?>
    </footer>
    <?php endif; ?>

<?php print render($content['comments']); ?>

<?php if (!$page): ?>
  </article> <!-- /.node -->
<?php endif; ?>
