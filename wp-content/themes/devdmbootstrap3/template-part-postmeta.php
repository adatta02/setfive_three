<?php global $dm_settings; ?>
<?php if ($dm_settings['show_postmeta'] != 0) : ?>
    <p class="text-right">
    	<?php _e('Posted In','devdmbootstrap3'); ?>: <?php the_category(', '); ?>
    </p>
    <?php if( has_tag() ) : ?>
        <p class="text-right"><span class="glyphicon glyphicon-tags"></span>
        	<?php the_tags(); ?>
        </p>
    <?php endif; ?>
<?php endif; ?>