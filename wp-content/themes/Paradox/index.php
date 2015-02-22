<?php
/**
 * The main template file
 * 
 * @package bootstrap-basic
 */
?>

<?php get_header(); ?>

<section class="primary-content">
    <div class="container"> 
        <div class="row">    
<!--             <aside class="col-md-4 sidebar sidebar-box">               
                <?php //dynamic_sidebar('sidebar-blog'); ?>                     
            </aside>          -->                  	
            <main class="col-md-12 main-col page-content">                
            <!-- <main class="col-md-12 col-md-offset-1 col-lg-7 col-lg-offset-1 main-col page-content">                 -->

                <div id="main" class="site-main" role="main">                	
                    <div id="box-container" class="masonry js-masonry" data-masonry-options='{ "columnWidth": ".grid-sizer", "itemSelector": ".box-item" }'>
                        <div class="grid-sizer"></div>                                                                     
                            <!-- REGULAR BLOG LOOP -->
            				<?php if (have_posts()) { ?> 
                				<?php 
                				// start the loop
                				while (have_posts()) {
                					the_post();                                                   					
                					/* Include the Post-Format-specific template for the content.
                					* If you want to override this in a child theme, then include a file
                					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
                					*/
                					// get_template_part('content', get_post_format());

                                    ?> 

                                    <!-- Article -->
                                    <article id="post-<?php the_ID(); ?>" <?php post_class( 'box-item panel panel-default' ); ?>>
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
                                <?php    


                			}// end while
            				bootstrapBasicPagination(); 
                            ?>

            				<?php } else { ?> 
            				<?php get_template_part('no-results', 'index'); ?>
            				<?php } // endif; ?>		
                            <!-- END REGULAR BLOG LOOP -->			
                        </div>
                    </div>
                </div>           
            </main>
        </div> <!-- .row -->                      
    </div>
</section>		
 
<?php get_footer(); ?> 