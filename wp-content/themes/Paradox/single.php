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
            	<?php dynamic_sidebar('sidebar-blog'); ?>                     
		    </aside>    			
		</div>
	</div>
</section>
				

<?php get_footer(); ?> 