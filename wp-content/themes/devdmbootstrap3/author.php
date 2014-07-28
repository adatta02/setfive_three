<?php
/** author.php
 *
 * The template for displaying Author Archive pages.
 */
?>

<?php 
$pageTitle = "Author Archives:<br>" . get_the_author();
get_header(); ?>

<?php require_once "template-part-head.php" ?>

<?php get_template_part('template-part', 'topnav'); ?>

<div class="row dmbs-content">
    <div class="col-md-8 col-md-offset-2 dmbs-main">	
			<div id="content" class="padded-content" role="main">
		<?php 
		if ( have_posts() ) :
			the_post(); ?>
	
			<?php
			rewind_posts();
			// If a user has filled out their description, show a bio on their entries.
			if ( get_the_author_meta( 'description' ) ) : ?>
			<div class="well">
                <aside id="author-info" class="row">	
                	<div id="author-description" class="col-md-9">
                		<h3><?php printf( __( 'About %s', 'the-bootstrap' ), get_the_author() ); ?></h3>
                		<p><?php the_author_meta( 'description' ); ?></p>
                		<div id="author-link">
                			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
                				<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'the-bootstrap' ), get_the_author() ); ?>
                			</a>
                		</div><!-- #author-link	-->
                	</div><!-- #author-description -->
                	<div id="author-avatar" class="col-md-3">
                		<div class="pull-right">
                			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
                				<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'the_bootstrap_author_bio_avatar_size', 100 ) ); ?>
                			</a>
                		</div>
                	</div><!-- #author-avatar -->		
                </aside><!-- #author-info -->
			</div>
			<?php endif;
			
			while ( have_posts() ) {
				the_post();
				?>
				
       <div <?php post_class(); ?>>

            <h2 class="page-header">
                <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'devdmbootstrap3' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
            </h2>

                <div class="date-line">
                    Posted <?php the_time('F jS, Y'); ?>                    
             		</div>                            
            
            <?php if ( has_post_thumbnail() ) : ?>
               <?php the_post_thumbnail(); ?>
                <div class="clear"></div>
            <?php endif; ?>
            <?php the_content(); ?>
            <?php wp_link_pages(); ?>
            <?php get_template_part('template-part', 'postmeta'); ?>                            
       </div>
								
				<?php
			}
			?>
			
			<div class="text-center pager-container">
      	<div class="btn-group">
        	<?php posts_nav_link(" "); ?>
         </div>
			</div>
			
			
			<?php
		else :
			get_404_template();
		endif;
		
		?>
	</div><!-- #content -->	

	</div>
</div>

<?php
get_footer();