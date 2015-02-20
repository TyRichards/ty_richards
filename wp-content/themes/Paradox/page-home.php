<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section class="primary-content">
    <div class="container">
        <main class="main-col page-content col-md-3">
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
        </main>
        <aside class="col-sm-9">
            <!-- <div class="col-sm-10 col-sm-offset-2"> -->
                <?php 
                    if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                    the_post_thumbnail('sidebar-thumb', array('class' => 'feature-image attachment-sidebar-thumb img-rounded' ));
                    } 
                ?>         
                <?php get_sidebar('home'); ?>
            <!-- </div> -->
        </aside>
    </div>
</section>

<!-- <a href="#top">Back to top</a> -->

<?php get_footer(); ?> 