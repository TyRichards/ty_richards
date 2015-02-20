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
                    <div id="box-container" class="masonry js-masonry" data-masonry-options='{ "columnWidth": ".grid-sizer", "itemSelector": ".box-item" }'">
                        <div class="grid-sizer"></div>




<article class="box-item panel panel-default" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-header panel-heading">
        Custom Image
    </div><!-- .entry-header -->

    <div class="entry-summary panel-body">
        <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark">Permanent Post</a></h1>

        <?php if ('post' == get_post_type()) { ?> 
        <div class="entry-meta">
            <?php bootstrapBasicPostOn(); ?> 
        </div><!-- .entry-meta -->
        <?php } //endif; ?> 
                
    <?php if (is_search()) { // Only display Excerpts for Search ?> 
        <?php the_excerpt(); ?> 
        <div class="clearfix"></div>
    </div><!-- .entry-summary -->
    <?php } else { ?> 
    <div class="entry-content">
        <?php the_content(bootstrapBasicMoreLinkText()); ?> 
        <div class="clearfix"></div>
        <?php 
        /**
         * This wp_link_pages option adapt to use bootstrap pagination style.
         * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
         */
        wp_link_pages(array(
            'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
            'after'  => '</ul></div>',
            'separator' => ''
        ));
        ?> 
    </div><!-- .entry-content -->
    <?php } //endif; ?> 

    <div class="well well-lg text-center">
            <?php gravity_form(5, true, true, false, null, true, 50); ?>
    </div>  

    <footer class="entry-meta">
        <?php if ('post' == get_post_type()) { // Hide category and tag text for pages on Search ?> 
        <div class="entry-meta-category-tag">
            <?php
                /* translators: used between list items, there is a space after the comma */
                $categories_list = get_the_category_list(__(', ', 'bootstrap-basic'));
                if (!empty($categories_list)) {
            ?> 
            <span class="cat-links">
                <?php echo bootstrapBasicCategoriesList($categories_list); ?> 
            </span>
            <?php } // End if categories ?> 

            <?php
                /* translators: used between list items, there is a space after the comma */
                $tags_list = get_the_tag_list('', __(', ', 'bootstrap-basic'));
                if ($tags_list) {
            ?> 
            <span class="tags-links">
                <?php echo bootstrapBasicTagsList($tags_list); ?> 
            </span>
            <?php } // End if $tags_list ?> 
        </div><!--.entry-meta-category-tag-->
        <?php } // End if 'post' == get_post_type() ?> 

<!--        <div class="entry-meta-comment-tools">
            <?php if (! post_password_required() && (comments_open() || '0' != get_comments_number())) { ?> 
            <span class="comments-link"><?php bootstrapBasicCommentsPopupLink(); ?></span>
            <?php } //endif; ?> 

            <?php bootstrapBasicEditPostLink(); ?> 
        </div> --><!--.entry-meta-comment-tools-->
    </footer><!-- .entry-meta -->
</article><!-- #post-## -->




            				<?php if (have_posts()) { ?> 
                				<?php 
                				// start the loop
                				while (have_posts()) {
                					the_post();
                					
                					/* Include the Post-Format-specific template for the content.
                					* If you want to override this in a child theme, then include a file
                					* called content-___.php (where ___ is the Post Format name) and that will be used instead.
                					*/
                					get_template_part('content', get_post_format());
                			}// end while
            				bootstrapBasicPagination(); 
                            ?>

            				<?php } else { ?> 
            				<?php get_template_part('no-results', 'index'); ?>
            				<?php } // endif; ?>					
                        </div>
                    </div>
                </div>           
            </main>
        </div> <!-- .row -->                      
    </div>
</section>		
 
<?php get_footer(); ?> 