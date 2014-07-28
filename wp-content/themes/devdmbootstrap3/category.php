<?php 
$pageTitle = "Category: " . single_cat_title( '', false );
get_header(); ?>

<?php require_once "template-part-head.php" ?>

<?php get_template_part('template-part', 'topnav'); ?>

	<div class="row dmbs-content">
    <div class="col-md-8 col-md-offset-2 dmbs-main">	
			<div id="content" class="padded-content" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
			
			
			<?php endwhile; ?>
	 </div><!-- #content -->	
	</div>
</div>

<?php
get_footer();