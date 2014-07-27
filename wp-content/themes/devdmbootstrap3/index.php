<?php get_header(); ?>

<?php get_template_part('template-part', 'head'); ?>

<?php get_template_part('template-part', 'topnav'); ?>

<!-- start content container -->
<div class="row dmbs-content">

    <div class="col-md-8 col-md-offset-2 dmbs-main">

            <?php // theloop
                if ( have_posts() ) : while ( have_posts() ) : the_post();

                    // single post
                    if ( is_single() ) : ?>
                    
                        <div <?php post_class(); ?>>

                        		<div class="date-line">
                        			Posted <?php the_time('F jS, Y'); ?>
                        			by <?php the_author_posts_link(); ?>
                        	 </div>
                        
                            <?php if ( has_post_thumbnail() ) : ?>
                                <?php the_post_thumbnail(); ?>
                                <div class="clear"></div>
                            <?php endif; ?>
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                            <?php get_template_part('template-part', 'postmeta'); ?>
                            <?php comments_template(); ?>

                        </div>
                    <?php
                    // list of posts
                    else : ?>
                       <div <?php post_class(); ?>>

                            <h2 class="page-header">
                                <a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'devdmbootstrap3' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
                            </h2>

                        		<div class="date-line">
                        			Posted <?php the_time('F jS, Y'); ?>
                        			by <?php the_author_posts_link(); ?>
                        	 </div>                            
                            
                            <?php if ( has_post_thumbnail() ) : ?>
                               <?php the_post_thumbnail(); ?>
                                <div class="clear"></div>
                            <?php endif; ?>
                            <?php the_content(); ?>
                            <?php wp_link_pages(); ?>
                            <?php get_template_part('template-part', 'postmeta'); ?>                            
                       </div>

                     <?php  endif; ?>

                <?php endwhile; ?>
                
                	<div class="text-center pager-container">
                		<div class="btn-group">
                			<?php posts_nav_link(" "); ?>
                	  </div>
                	</div>
                	
                	<script>
                		jQuery(document).ready(function($){
                    		$(".pager-container a").addClass("btn btn-default");
                		});
                	</script>
                	
                <?php else: ?>

                    <?php get_404_template(); ?>

            <?php endif; ?>

   </div>

</div>
<!-- end content container -->

<?php get_footer(); ?>

