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
