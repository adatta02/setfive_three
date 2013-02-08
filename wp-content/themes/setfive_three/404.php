<?php
/** 404.php
 *
 * The template for displaying 404 pages (Not Found).
 *
 * @author		Konstantin Obenland
 * @package		The Bootstrap
 * @since		1.0.0 - 07.02.2012
 */

$GLOBALS["header_banner"] = "<em>Nothing</em> to see <em>here</em>...";

get_header(); ?>

<section id="primary" class="span8">

	<?php tha_content_before(); ?>
	<div id="content" role="main">
		<?php tha_content_top(); ?>
		
		<?php tha_entry_before(); ?>
		<article id="post-0" class="type-page post error404 not-found">
			<?php tha_entry_top(); ?>
			<header class="page-header">
				<h1 class="entry-title">404 - Page not found</h1>
			</header><!-- .page-header -->

			<div class="entry-content">
			
				<div class="centered">
					<p>Sorry! Have you seen my <em class="strike">stapler</em> page?</p>
					<img src="/wp-content/themes/setfive_three/images/milton-office-space.jpg" class="shadowed-thumbnail 404-milton" />
				</div>
			
			</div><!-- .entry-content -->
			<?php tha_entry_bottom(); ?>
		</article><!-- #post-0 .post .error404 .not-found -->
		<?php tha_entry_after(); ?>
		
		<?php tha_content_bottom(); ?>
	</div><!-- #content -->
	<?php tha_content_after(); ?>
</section><!-- #primary -->

<?php
get_sidebar();
get_footer();


/* End of file 404.php */
/* Location: ./wp-content/themes/the-bootstrap/404.php */