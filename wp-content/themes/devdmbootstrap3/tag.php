<?php 
$pageTitle = "#" . single_tag_title( '', false );
get_header(); ?>

<?php require_once "template-part-head.php" ?>

<?php get_template_part('template-part', 'topnav'); ?>

	<div class="row posts-list dmbs-content">
    <div class="col-md-8 col-md-offset-2 dmbs-main">	

			<?php while ( have_posts() ) : the_post(); ?>				
				<?php include "_renderPost.php" ?>							
			<?php endwhile; ?>
			
			<div class="text-center pager-container">
      	<div class="btn-group">
        	<?php posts_nav_link(" "); ?>
         </div>
			</div>
						
	</div>
</div>

<?php
get_footer();