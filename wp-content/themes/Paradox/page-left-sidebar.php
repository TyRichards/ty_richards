<?php
/*
Template Name: Left Sidebar
*/
?>

<?php get_header(); ?>

<section class="primary-content">
    <div class="sidebar background landscape">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div <?php body_class(); ?>>
                        <!-- <img src="startup/common-files/img/content/landscape.jpg" alt=""> -->
                        <?php 
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                            the_post_thumbnail('sidebar-thumb', array('class' => '' ));
                            } 
                            else {
                                ?><img src="<?php echo get_template_directory_uri(); ?>/assets/images/sidebar-default.jpg" class="feature-image attachment-sidebar-thumb wp-post-image col-md-9 col-no-padding" alt="<?php wp_title('|', true, 'right'); ?>"><?php
                            }
                        ?> 
                        <?php get_sidebar('default'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="container col-no-padding-xs">        
        <div class="row">
            <section class="main-col page-content col-sm-7 col-sm-push-5 container">                
                <div id="main" class="site-main" role="main">
                    <?php 
                    while (have_posts()) {
                      the_post();

                      get_template_part('content', 'page');

                      echo "\n\n";
                      
                      // If comments are open or we have at least one comment, load up the comment template
                      if (comments_open() || '0' != get_comments_number()) {
                        comments_template();
                      }

                      echo "\n\n";

                    } //endwhile;
                    ?> 
                </div>           
            </section>
        </div>      
    </div>
</section>

<?php get_footer(); ?> 
