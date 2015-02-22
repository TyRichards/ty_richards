<?php
/**
 * Template for dispalying single post (read full post page).
 * 
 * @package bootstrap-basic
 */
?>

<?php get_header(); ?>

<section class="primary-content">
    <div class="container">        
        <div class="row">         	
            <main class="col-md-7 col-md-offset-0 col-lg-6 col-lg-offset-1 main-col page-content">   
				<div id="main" class="site-main" role="main">
					<?php 
					while (have_posts()) {
						the_post();

						get_template_part('content', get_post_format());

						echo "\n\n";
						
						bootstrapBasicPagination();

						echo "\n\n";
						
						// If comments are open or we have at least one comment, load up the comment template
						if (comments_open() || '0' != get_comments_number()) {
							comments_template();
						}

						echo "\n\n";

					} //endwhile;
					?> 
				</div>
			</main>
		    <aside class="col-md-4 col-md-offset-1 col-lg-3 col-lg-offset-1 sidebar sidebar-box">		        
				<?php
				query_posts('showposts=1');
				if (have_posts()) {
				  while (have_posts()) : the_post();
				    if ( is_sticky() ) : ?>
				       
						<!-- Article -->
                        <article id="post-<?php the_ID(); ?>" <?php post_class( 'panel panel-default' ); ?>>
                            <div class="entry-header panel-heading">
                                <!-- Feature Image -->
                                <?php
                                if (has_post_thumbnail()) { 
                                    echo '<a href="' . get_permalink() . '" title="' . the_title_attribute('echo=0') . '">';                
                                    the_post_thumbnail();
                                    echo '</a>';            
                                } 
                                ?>          
                                <!-- Audio -->
                                <?php if(get_field('playlist')) {
                                    echo get_field('playlist');
                                } ?>
                                <!-- Video -->
                                <?php if(get_field('youtube')) { ?>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo the_field('youtube'); ?>?vq=hd720&rel=0&autohide=1&controls=1&modestbranding=1&showinfo=0" frameborder="0" allowfullscreen></iframe>                  
                                    </div>
                                <?php } ?>      
                                <?php if(get_field('vine')) { ?>
                                    <div class="embed-responsive embed-responsive-1by1">
                                        <iframe src="https://vine.co/v/<?php echo the_field('vine'); ?>/embed/simple" width="600" height="600" frameborder="0"></iframe>       
                                    </div>
                                <?php } ?>
                            </div><!-- .entry-header -->

                            <div class="entry-summary panel-body">
                                <h2 class="entry-title" style="margin-top: 0;"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                    <?php the_excerpt(); ?>
                                <?php if ('post' == get_post_type()) { ?>
                                <div class="entry-meta">
                                    <?php bootstrapBasicPostOn(); ?> 
                                </div><!-- .entry-meta -->
                                <?php } //endif; ?> 
                            </div>
                        </article><!-- #post-## -->

				    <?php endif;
				  endwhile;
				}
				wp_reset_query();
				?>   	
            	<?php // dynamic_sidebar('sidebar-blog'); ?>                     
		    </aside>    			
		</div>
	</div>
</section>
				

<?php get_footer(); ?> 