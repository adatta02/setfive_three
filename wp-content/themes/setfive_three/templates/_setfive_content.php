<?php
/** _setfive_content.php
 *
 * Template Name: Setfive 3.0 Content Page
 *
 */

$GLOBALS["headerFn"] = function(){
?>
	<div class="span7">                            	
		<div class="banner-text">We <em>build</em> it, <em>fix</em> it, and <em>remix</em> it.</div>
	</div>
<?php
};

get_header(); ?>

<section id="primary" class="span12">
	<?php tha_content_before(); ?>
	<div id="content" role="main">
		<?php tha_content_top();
		
		the_post();
		get_template_part( '/partials/content', 'page' );
		
		tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
get_footer();